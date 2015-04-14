<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 4:43 PM
 * 
 */

namespace Bitxone\MainBundle\Services;

use Bitxone\MainBundle\Entity\OdEdmConversionFtp;
use Bitxone\MainBundle\Entity\OrderDetails;
use Bitxone\MainBundle\Entity\Orders;
use Doctrine\DBAL\Schema\View;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MainManager 
{
	protected $container;
	protected $em;
	protected $emJayaimee;


	function __construct( ContainerInterface $container, EntityManager $entityManager, EntityManager $entityManagerJayaimee )
	{
		$this->container = $container;
		$this->em        = $entityManager;
		$this->emJayaimee = $entityManagerJayaimee;
	}

	public function exportNewOrdersCSV()
	{
		$params = array("status_id" => 1);
		$newOrders  = $this->em->getRepository( "BitxoneMainBundle:Orders" )->findBy( $params );

		/**
		 * Truncating the intermidate table to execute the SP on the Jayaimee-NipData which will result back the csv content for the ERP
		 */
		$truncateConversionFtp = $this->emJayaimee->getConnection()->getDatabasePlatform()->getTruncateTableSQL("OD_EDMConversion_FTP");
		$result = new ResultSetMapping();
		$this->emJayaimee->createNativeQuery( $truncateConversionFtp, $result)->execute();

		if ($newOrders)
		{
			foreach($newOrders as $order)
			{

				$orderDetail = $order->getOrderDetails();
				$detailIndex = 1;
				foreach($orderDetail as $detail)
				{

					$detailCount = $orderDetail->count();

					$convertionFtp = new OdEdmConversionFtp();
					$convertionFtp->setCustomer($order->getRetailerId()->getErpCustomCode());

					/**
					 * Will only append the .1.2, .2.2 to the merchant order id when the detail count is
					 * greater than 1.
					 */
					if ($detailCount > 1)
						$convertionFtp->setPoNumber($order->getMerchantOrderId().".$detailIndex.$detailCount");
					else
						$convertionFtp->setPoNumber($order->getMerchantOrderId());

					$convertionFtp->setBillTo($order->getBillToName());
					$convertionFtp->setBillAddress1($order->getBillToAddress1());
					$convertionFtp->setBillAddress2($order->getBillToAddress2());
					$convertionFtp->setBillCity($order->getBillToCity());
					$convertionFtp->setBillState($order->getBillToState());
					$convertionFtp->setBillZip($order->getBillToPostalCode());
					$convertionFtp->setBillCountry($order->getBillToCountry());
					$convertionFtp->setShipTo($order->getShipToName());
					$convertionFtp->setShipTocompany($order->getShipToName());
					$convertionFtp->setShipAddress1($order->getShipToAddress1());
					$convertionFtp->setShipAddress2($order->getShipToAddress2());
					$convertionFtp->setShipCity($order->getShipToCity());
					$convertionFtp->setShipState($order->getShipToState());
					$convertionFtp->setShipZip($order->getShipToPostalCode());
					$convertionFtp->setShipCountry($order->getShipToCountry());
					/**
					 * Shipping method is being replace by a mapping table
					 * where each retailer will have its curresponding codes and
					 * translation code into the ERP.
					 */
					$shippingParams = array("retailerId" => $order->getRetailerId()->getId(), "chubCode" => $order->getShippingMethod());
					$shippingCode = $this->em->getRepository("BitxoneMainBundle:ShippingCodes")->findOneBy($shippingParams);
					if ($shippingCode)
					{
						$convertionFtp->setShipMethod($shippingCode->getErpShipCode());

					} else
					{
						$convertionFtp->setShipMethod(null);
					}

					/**
					 * Specific Belk Rule, which uses upc as item number instead of the vendor code
					 * So we will search the vw_ItemsSKU to get the upc and of the vendor code
					 * Belk Retailers ID is 2
					 * The upc code from belk is 13 length long, so when coming in
					 * we must remove the trailing 0 to make it 12 because ERP
					 * accepts only 12 length values.
					 * But for returning shipping confirmations this upc must have
					 * length of 13 so padding the 0 is mandatory
					 *
					 */
					if ($order->getRetailerId()->getId() ==  2)
					{

						$resultSet = new ResultSetMapping();
						$resultSet ->addScalarResult("vendor_sku","vendor_sku");
						$resultSet ->addScalarResult("upc","upc");

						$vendorSku = ltrim($detail->getVendorSku(),"0"); //Trailing out the left 0 to make it 12 digits if present
						$this->em->getConnection()->exec("set ansi_nulls on; set ansi_warnings on; set ansi_padding on; set quoted_identifier on; set concat_null_yields_null on;");
						$vwItemsSku = $this->em->createNativeQuery("select vendor_sku, upc from vw_ItemsSKU where upc = :sku ", $resultSet)
							->setParameter("sku", $vendorSku)
							->getResult();

						if ($vwItemsSku)
						{
							$viewSku = trim($vwItemsSku[0]["vendor_sku"]);
							//$viewUpc = trim( $vwItemsSku[ 0 ][ "upc" ] );
							$convertionFtp->setItemNumber( $viewSku );

						} else
						{
							$convertionFtp->setItemNumber("");
						}


					} else
					{
						$convertionFtp->setItemNumber($detail->getVendorSku());
					}

					$convertionFtp->setAssociateName($detail->getHubLineId());
					/**
					 * Converting ring size info to be only numeric
					 * Change to get size from description because
					 * the size_code field is not reliable for all items
					 */
					//$sizeCode = $detail->getSizeCode();
					$sizeCode = trim($detail->getDescription());
					$sizeCode = substr($sizeCode, -2); //Getting the last 2 characted of the description
					$sizeCode = trim($sizeCode);
					$sizeCode = preg_replace("/[^0-9]+/", "", $sizeCode);
					$sizeCode = (int)$sizeCode;
					if ($sizeCode > 0)
						$sizeCode = "Size ". $sizeCode;
					else
						$sizeCode = null;

					if ($sizeCode)
						$convertionFtp->setItemExtensionsub2($sizeCode);

					$personalizationData = trim($detail->getPersonalizationData());

					$parsePersonalizations = $this->parsePersonalizationData($order->getRetailerId()->getId(), $personalizationData);

					$personalizationLines = $parsePersonalizations["personalizations"];
					$stoneContent = $parsePersonalizations["stones"];

					/**
					 * Adding the color code from its own column, because if exist in
					 * personalization data then it will be put into the stones content
					 */

					if (trim($detail->getColorCode()) != "000")
						$personalizationLines[] = trim($detail->getColorCode());

					/**
					 * Adding the size to personalizations too
					 */
					if ($sizeCode)
						$personalizationLines[] = $sizeCode;

					$perCount = count($personalizationLines);
					$stoneCount = count($stoneContent);

					/**
					 * Writing down the personalizations
					 */
					switch($perCount)
					{
						case 1:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
						break;
						case 2:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
						break;
						case 3:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
						break;
						case 4:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
						break;
						case 5:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
						break;
						case 6:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
						break;
						case 7:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
						break;
						case 8:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
						break;
						case 9:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
						break;
						case 10:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
						break;
						case 11:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
							$convertionFtp->setPersonalization11($personalizationLines[10]);
						break;
						case 12:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
							$convertionFtp->setPersonalization11($personalizationLines[10]);
							$convertionFtp->setPersonalization12($personalizationLines[11]);
						break;
						case 13:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
							$convertionFtp->setPersonalization11($personalizationLines[10]);
							$convertionFtp->setPersonalization12($personalizationLines[11]);
							$convertionFtp->setPersonalization13($personalizationLines[12]);
						break;
						case 14:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
							$convertionFtp->setPersonalization11($personalizationLines[10]);
							$convertionFtp->setPersonalization12($personalizationLines[11]);
							$convertionFtp->setPersonalization13($personalizationLines[12]);
							$convertionFtp->setPersonalization14($personalizationLines[13]);
						break;
						case 15:
							$convertionFtp->setPersonalization1($personalizationLines[0]);
							$convertionFtp->setPersonalization2($personalizationLines[1]);
							$convertionFtp->setPersonalization3($personalizationLines[2]);
							$convertionFtp->setPersonalization4($personalizationLines[3]);
							$convertionFtp->setPersonalization5($personalizationLines[4]);
							$convertionFtp->setPersonalization6($personalizationLines[5]);
							$convertionFtp->setPersonalization7($personalizationLines[6]);
							$convertionFtp->setPersonalization8($personalizationLines[7]);
							$convertionFtp->setPersonalization9($personalizationLines[8]);
							$convertionFtp->setPersonalization10($personalizationLines[9]);
							$convertionFtp->setPersonalization11($personalizationLines[10]);
							$convertionFtp->setPersonalization12($personalizationLines[11]);
							$convertionFtp->setPersonalization13($personalizationLines[12]);
							$convertionFtp->setPersonalization14($personalizationLines[13]);
							$convertionFtp->setPersonalization15($personalizationLines[14]);
						break;

					}

					switch ($stoneCount)
					{
						case 1:
							$convertionFtp->setBirthStone1($stoneContent[0]);
						break;
						case 2:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
						break;
						case 3:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
						break;
						case 4:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
							$convertionFtp->setBirthStone4($stoneContent[3]);
						break;
						case 5:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
							$convertionFtp->setBirthStone4($stoneContent[3]);
							$convertionFtp->setBirthStone5($stoneContent[4]);
						break;
						case 6:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
							$convertionFtp->setBirthStone4($stoneContent[3]);
							$convertionFtp->setBirthStone5($stoneContent[4]);
							$convertionFtp->setBirthStone6($stoneContent[5]);
						break;
						case 7:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
							$convertionFtp->setBirthStone4($stoneContent[3]);
							$convertionFtp->setBirthStone5($stoneContent[4]);
							$convertionFtp->setBirthStone6($stoneContent[5]);
							$convertionFtp->setBirthStone7($stoneContent[6]);
						break;
						case 8:
							$convertionFtp->setBirthStone1($stoneContent[0]);
							$convertionFtp->setBirthStone2($stoneContent[1]);
							$convertionFtp->setBirthStone3($stoneContent[2]);
							$convertionFtp->setBirthStone4($stoneContent[3]);
							$convertionFtp->setBirthStone5($stoneContent[4]);
							$convertionFtp->setBirthStone6($stoneContent[5]);
							$convertionFtp->setBirthStone7($stoneContent[6]);
							$convertionFtp->setBirthStone8($stoneContent[7]);
						break;

					}

					$detailIndex++;

					$convertionFtp->setOrderDate($order->getOrderDate()->format("m/d/Y H:i:s"));
					$convertionFtp->setSalesPerson($order->getRetailerId()->getSalesPerson());
					$convertionFtp->setShipTocompany($order->getShipToCompanyName());

					$this->emJayaimee->persist($convertionFtp);

				}


			}

			$this->emJayaimee->flush();

			/**
			 * Ready to execute stored procedure
			 */
			/**
			 * setting specify sqlserver null handling options on SP
			 */
			//$result = new ResultSetMapping();
			$this->emJayaimee->getConnection()->exec("set ansi_nulls on; set ansi_warnings on; set ansi_padding on; set quoted_identifier on; set concat_null_yields_null on;");
			$storedProc = $this->emJayaimee->getConnection()->prepare("exec OD_SaveEDMConversionFTP");
			$storedProc->execute();
			$result = $storedProc->fetchAll();

			if ($result)
			{
				/**
				 * Changing status of orders and its details to downloaded
				 */
				if ($newOrders)
				{
					$downloadedStatus = $this->em->getRepository("BitxoneMainBundle:OrdersStatuses")->find(2);
					foreach($newOrders as $order)
					{

						$order->setStatusId($downloadedStatus);
						$details = $order->getOrderDetails();
						foreach($details as $detail)
						{
							$detail->setStatusId($downloadedStatus);
							$this->em->persist($detail);
						}

						$this->em->persist($order);

					}

					$this->em->flush();

					$csv = $this->generateCsv($result);

					return $csv;

				}

			}



		}


		return null;

	}

	private function parsePersonalizationData($retailerId, $personalizationData)
	{

		$initialsContent = array();
		$textContent     = array();
		$stoneContent    = array();
		$personalizationLines = array();

		/**
		 * Personalization data parsing bluestem specific rules
		 * Based on conversation with bluestem the rules are:
		 * There will only be 3 lines of personalizations
		 * Line 1 will be personalizations Px(e.g, P1, P2, etc)
		 * Line 2 will be birthstones
		 * Line 3 (not yet defined)
		 * ~ is a line separator
		 * asterisk(*) is a personalization and birthstones separator
		 * | pipe is the file format
		 *
		 * Ring size has its own field so far.
		 *
		 */
		if ($retailerId == "1")
		{

			$lines     = explode( "~", $personalizationData );
			$lineIndex = 1;

			$countLines = count($lines);
			switch($countLines)
			{
				case 1 :
					$line1 = explode("Line 1:=", $lines[0]);
					/**
					 * Its index 1 because on the explode the first element is blank
					 * for since Line 1:= only exist once per line
					 */
					$line1 = $line1[1];
					$personalizations = explode("*", $line1);


					/**
					 * Going through each personalization because
					 * some might be empty like the last occurence
					 * of an asterisk
					 */
					foreach ( $personalizations as $line )
					{
						$line = trim($line);
						if ( strlen($line) > 0 )
							$initialsContent[] = $line;

					}

					$personalizationLines = $initialsContent;

				break;
				case 2 :
					/**
					 * Parsing the personalizations on Line 1
					 */
					$line1 = explode("Line 1:=", $lines[0]);
					$line1 = $line1[1];
					$personalizations = explode("*", $line1);

					/**
					 * Going through each personalization because
					 * some might be empty like the last occurence
					 * of an asterisk
					 */
					foreach ( $personalizations as $line )
					{
						$line = trim($line);
						if ( strlen($line) > 0 )
							$initialsContent[] = $line;

					}

					$personalizationLines = $initialsContent;

					/**
					 * Parsing the stones on Line 2
					 */
					$line2 = explode("Line 2:=", $lines[1]);
					$line2 = $line2[1];
					$stones = explode("*", $line2);

					/**
					 * Going through each personalization because
					 * some might be empty like the last occurence
					 * of an asterisk
					 */
					foreach ( $stones as $stone )
					{
						$stone = trim($stone);
						if ( strlen($stone) > 0 )
							$stoneContent[] = $stone;

					}


				break;

			}


		} else
		{

			$lines     = explode( "~", $personalizationData );
			$lineIndex = 1;

			foreach ( $lines as $line )
			{


				$lineContent = explode( "Line $lineIndex=", $line );
				if ( count( $lineContent ) > 1 )
				{
					//Collecting initials where ever they are
					$pos = strpos( $lineContent[ 1 ], "Initials =" );
					if ( $pos !== false )
					{
						$initials           = trim( $lineContent[ 1 ], "Initials =" );
						$initials           = trim( $initials );
						$initialsContent[ ] = $initials;
					}

					//Collecting text lines where ever they are
					$pos = strpos( $lineContent[ 1 ], "text =" );
					if ( $pos !== false )
					{
						$textLine       = trim( $lineContent[ 1 ], "text =" );
						$textLine       = trim( $textLine );
						$textContent[ ] = $textLine;
					}

					//Collecting stones lines where ever they are
					$pos = strpos( $lineContent[ 1 ], "Stone =" );
					if ( $pos !== false )
					{
						$stoneLine       = trim( $lineContent[ 1 ], "Stone =" );
						$stoneLine       = trim( $stoneLine );
						$stoneContent[ ] = $stoneLine;
					}

					//Collecting color lines where ever they are and putting them into the stones content
					$pos = strpos( $lineContent[ 1 ], "Color =" );
					if ( $pos !== false )
					{
						$stoneLine       = trim( $lineContent[ 1 ], "Color =" );
						$stoneLine       = trim( $stoneLine );
						$stoneContent[ ] = $stoneLine;
					}


				}

				$lineIndex++;

			}

			$personalizationLines = array_merge( $initialsContent, $textContent );
		}

		$result = array( "personalizations" => $personalizationLines, "stones" => $stoneContent );

		return $result;

	}

	private function generateCsv($exportResult)
	{
		/**
		* Dumping the csv
		*/

		if ($exportResult)
		{
			$fileExport = "/tmp/export.tmp";
			$handle     = fopen( $fileExport, "w+" );
			foreach ( $exportResult as $content )
			{

				$index       = 1;
				$orderHeader = array( "*" );
				$orderDetail = array();
				foreach ( $content as $detail )
				{
					$detail = trim( $detail );
					if ( ( $index > 1 ) && ( $index <= 37 ) )
					{
						$orderHeader[ ] = $detail;
					}

					if ( ( $index > 38 ) && ( $index <= 75 ) )
					{

						if ( ( $index >= 58 ) and ( $index <= 75 ) )
						{
							if ( ( $index >= 58 ) && ( $detail != "^" ) )
							{
								$orderDetail[ ] = $detail;
							}
						} else
						{
							if ( ( $index > 38 ) && ( $index < 57 ) )
							{
								$orderDetail[ ] = $detail;
							}
						}

					}

					$index++;
				}

				fputcsv( $handle, $orderHeader, "|", '"' );
				fputcsv( $handle, $orderDetail, "|", '"' );
			}

			fclose( $handle );

			/**
			 * Removing double quotes from generate file
			 */
			$handle       = fopen( $fileExport, "r+" );
			$cleanContent = "";
			while ( !feof( $handle ) )
			{
				$line = fgets( $handle );
				$line = str_replace( '"', "", $line );
				$cleanContent .= $line;
			}
			fclose( $handle );

			$today = new \DateTime('now');
			$today = $today->format("YmdHis");

			$fileExport = "/tmp/export_$today.edm";
			file_put_contents( $fileExport, $cleanContent );

			return $fileExport;

		}

		return null;

	}

	public function markItemReship(OrderDetails $item)
	{
		if ($item instanceof OrderDetails)
		{
			/**
			 * Order status 2 means it was passed to the ERP, processed and
			 * marked for shipping when shows up on the shipping view
			 */
			$orderStatus = $this->em->getRepository("BitxoneMainBundle:OrdersStatuses")->find(2);
			$item->setCancelReasonId(null);
			$item->setReturnReasonId(null);
			$item->setReturnDate(null);
			$item->setReturnMethodHandlingId(null);
			$item->setStatusId($orderStatus);
			$this->em->persist($item);
			$this->em->flush();

			return true;

		}

		return false;
	}


	public function markItemAsnew(Orders $item)
	{
		if ($item instanceof Orders)
		{
			/**
			 * Order status 2 means it was passed to the ERP, processed and
			 * marked for shipping when shows up on the shipping view
			 */
			$orderStatus = $this->em->getRepository("BitxoneMainBundle:OrdersStatuses")->find(1);
			$item->setStatusId($orderStatus);
			$this->em->persist($item);

			/**
			 * Changing status of detail to new order too
			 */
			$itemDetails = $item->getOrderDetails();
			foreach($itemDetails as $detail)
			{
				$detail->setCancelReasonId(null);
				$detail->setReturnReasonId(null);
				$detail->setReturnDate(null);
				$detail->setReturnMethodHandlingId(null);
				$detail->setStatusId($orderStatus);

				$this->em->persist($detail);

			}

			$this->em->flush();

			return true;

		}

		return false;
	}


	public function markItemAsdownloaded(Orders $item)
	{
		if ($item instanceof Orders)
		{
			/**
			 * Order status 2 means it was passed to the ERP, processed and
			 * marked for shipping when shows up on the shipping view
			 */
			$orderStatus = $this->em->getRepository("BitxoneMainBundle:OrdersStatuses")->find(2);
			$item->setStatusId($orderStatus);
			$this->em->persist($item);

			/**
			 * Changing status of detail to new order too
			 */
			$itemDetails = $item->getOrderDetails();
			foreach($itemDetails as $detail)
			{
				$detail->setStatusId($orderStatus);
				$this->em->persist($detail);
			}

			$this->em->flush();

			return true;

		}

		return false;
	}


}

