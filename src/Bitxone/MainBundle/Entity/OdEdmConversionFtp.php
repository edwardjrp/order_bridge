<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 5:22 PM
 * 
 */

namespace Bitxone\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OdEdmConversionFtp
 *
 * @ORM\Table(name="OD_EDMConversion_FTP")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class OdEdmConversionFtp 
{
	/**
	* @var integer
	*
	* @ORM\Column(name="id", type="integer", nullable=false)
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string
	*
	* @ORM\Column(name="Customer", type="string", length=50, nullable=true)
	*/
	private $customer;

	/**
	* @var string
	*
	* @ORM\Column(name="PONumber", type="string", length=500, nullable=true)
	*/
	private $poNumber;

	/**
	* @var string
	*
	* @ORM\Column(name="Billto", type="string", length=500, nullable=true)
	*/
	private $billTo;

	/**
	* @var string
	*
	* @ORM\Column(name="BillAddress1", type="string", length=500, nullable=true)
	*/
	private $billAddress1;

	/**
	* @var string
	*
	* @ORM\Column(name="Billaddress2", type="string", length=500, nullable=true)
	*/
	private $billAddress2;

	/**
	* @var string
	*
	* @ORM\Column(name="BillCity", type="string", length=500, nullable=true)
	*/
	private $billCity;

	/**
	* @var string
	*
	* @ORM\Column(name="BillState", type="string", length=500, nullable=true)
	*/
	private $billState;

	/**
	* @var string
	*
	* @ORM\Column(name="BillZip", type="string", length=500, nullable=true)
	*/
	private $billZip;

	/**
	* @var string
	*
	* @ORM\Column(name="BillCountry", type="string", length=500, nullable=true)
	*/
	private $billCountry;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipTo", type="string", length=500, nullable=true)
	*/
	private $shipTo;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipAddress1", type="string", length=500, nullable=true)
	*/
	private $shipAddress1;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipAddress2", type="string", length=500, nullable=true)
	*/
	private $shipAddress2;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipCity", type="string", length=500, nullable=true)
	*/
	private $shipCity;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipState", type="string", length=500, nullable=true)
	*/
	private $shipState;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipZip", type="string", length=500, nullable=true)
	*/
	private $shipZip;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipCountry", type="string", length=500, nullable=true)
	*/
	private $shipCountry;

	/**
	* @var string
	*
	* @ORM\Column(name="ShipMethod", type="string", length=500, nullable=true)
	*/
	private $shipMethod;

	/**
	* @var string
	*
	* @ORM\Column(name="AssociateName", type="string", length=500, nullable=true)
	*/
	private $associateName;

	/**
	* @var string
	*
	* @ORM\Column(name="ItemNumber", type="string", length=500, nullable=true)
	*/
	private $itemNumber;

	/**
	* @var string
	*
	* @ORM\Column(name="CSNotes", type="string", length=1000, nullable=true)
	*/
	private $csNotes;

	/**
	* @var string
	*
	* @ORM\Column(name="ItemExtensionSub1", type="string", length=500, nullable=true)
	*/
	private $itemExtensionsub1;

	/**
	* @var string
	*
	* @ORM\Column(name="ItemExtensionSub2", type="string", length=500, nullable=true)
	*/
	private $itemExtensionsub2;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization1", type="string", length=500, nullable=true)
	*/
	private $personalization1;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization2", type="string", length=500, nullable=true)
	*/
	private $personalization2;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization3", type="string", length=500, nullable=true)
	*/
	private $personalization3;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization4", type="string", length=500, nullable=true)
	*/
	private $personalization4;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization5", type="string", length=500, nullable=true)
	*/
	private $personalization5;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization6", type="string", length=500, nullable=true)
	*/
	private $personalization6;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization7", type="string", length=500, nullable=true)
	*/
	private $personalization7;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization8", type="string", length=500, nullable=true)
	*/
	private $personalization8;

	/**
	* @var string
	*
	* @ORM\Column(name="GeneralBirthstone", type="string", length=500, nullable=true)
	*/
	private $generalBirthstone;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone1", type="string", length=500, nullable=true)
	*/
	private $birthStone1;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone2", type="string", length=500, nullable=true)
	*/
	private $birthStone2;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone3", type="string", length=500, nullable=true)
	*/
	private $birthStone3;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone4", type="string", length=500, nullable=true)
	*/
	private $birthStone4;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone5", type="string", length=500, nullable=true)
	*/
	private $birthStone5;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone6", type="string", length=500, nullable=true)
	*/
	private $birthStone6;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone7", type="string", length=500, nullable=true)
	*/
	private $birthStone7;

	/**
	* @var string
	*
	* @ORM\Column(name="Birthstone8", type="string", length=500, nullable=true)
	*/
	private $birthStone8;

	/**
	* @var string
	*
	* @ORM\Column(name="OrderDate", type="string", length=500, nullable=true)
	*/
	private $orderDate;

	/**
	* @var string
	*
	* @ORM\Column(name="SalesPerson", type="string", length=500, nullable=true)
	*/
	private $salesPerson;

	/**
	* @var string
	*
	* @ORM\Column(name="Shipvia", type="string", length=500, nullable=true)
	*/
	private $shipVia;

	/**
	* @var string
	*
	* @ORM\Column(name="ShiptoCompany", type="string", length=500, nullable=true)
	*/
	private $shipTocompany;

	/**
	* @var string
	*
	* @ORM\Column(name="BatchNumber", type="string", length=50, nullable=true)
	*/
	private $batchNumber;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization9", type="string", length=500, nullable=true)
	*/
	private $personalization9;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization10", type="string", length=500, nullable=true)
	*/
	private $personalization10;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization11", type="string", length=500, nullable=true)
	*/
	private $personalization11;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization12", type="string", length=500, nullable=true)
	*/
	private $personalization12;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization13", type="string", length=500, nullable=true)
	*/
	private $personalization13;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization14", type="string", length=500, nullable=true)
	*/
	private $personalization14;

	/**
	* @var string
	*
	* @ORM\Column(name="Personalization15", type="string", length=500, nullable=true)
	*/
	private $personalization15;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id )
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getCustomer()
	{
		return $this->customer;
	}

	/**
	 * @param string $customer
	 */
	public function setCustomer( $customer )
	{
		$this->customer = $customer;
	}

	/**
	 * @return string
	 */
	public function getPoNumber()
	{
		return $this->poNumber;
	}

	/**
	 * @param string $poNumber
	 */
	public function setPoNumber( $poNumber )
	{
		$this->poNumber = $poNumber;
	}

	/**
	 * @return string
	 */
	public function getBillTo()
	{
		return $this->billTo;
	}

	/**
	 * @param string $billTo
	 */
	public function setBillTo( $billTo )
	{
		$this->billTo = $billTo;
	}

	/**
	 * @return string
	 */
	public function getBillAddress1()
	{
		return $this->billAddress1;
	}

	/**
	 * @param string $billAddress1
	 */
	public function setBillAddress1( $billAddress1 )
	{
		$this->billAddress1 = $billAddress1;
	}

	/**
	 * @return string
	 */
	public function getBillAddress2()
	{
		return $this->billAddress2;
	}

	/**
	 * @param string $billAddress2
	 */
	public function setBillAddress2( $billAddress2 )
	{
		$this->billAddress2 = $billAddress2;
	}

	/**
	 * @return string
	 */
	public function getBillCity()
	{
		return $this->billCity;
	}

	/**
	 * @param string $billCity
	 */
	public function setBillCity( $billCity )
	{
		$this->billCity = $billCity;
	}

	/**
	 * @return string
	 */
	public function getBillState()
	{
		return $this->billState;
	}

	/**
	 * @param string $billState
	 */
	public function setBillState( $billState )
	{
		$this->billState = $billState;
	}

	/**
	 * @return string
	 */
	public function getBillZip()
	{
		return $this->billZip;
	}

	/**
	 * @param string $billZip
	 */
	public function setBillZip( $billZip )
	{
		$this->billZip = $billZip;
	}

	/**
	 * @return string
	 */
	public function getBillCountry()
	{
		return $this->billCountry;
	}

	/**
	 * @param string $billCountry
	 */
	public function setBillCountry( $billCountry )
	{
		$this->billCountry = $billCountry;
	}

	/**
	 * @return string
	 */
	public function getShipTo()
	{
		return $this->shipTo;
	}

	/**
	 * @param string $shipTo
	 */
	public function setShipTo( $shipTo )
	{
		$this->shipTo = $shipTo;
	}

	/**
	 * @return string
	 */
	public function getShipAddress1()
	{
		return $this->shipAddress1;
	}

	/**
	 * @param string $shipAddress1
	 */
	public function setShipAddress1( $shipAddress1 )
	{
		$this->shipAddress1 = $shipAddress1;
	}

	/**
	 * @return string
	 */
	public function getShipAddress2()
	{
		return $this->shipAddress2;
	}

	/**
	 * @param string $shipAddress2
	 */
	public function setShipAddress2( $shipAddress2 )
	{
		$this->shipAddress2 = $shipAddress2;
	}

	/**
	 * @return string
	 */
	public function getShipCity()
	{
		return $this->shipCity;
	}

	/**
	 * @param string $shipCity
	 */
	public function setShipCity( $shipCity )
	{
		$this->shipCity = $shipCity;
	}

	/**
	 * @return string
	 */
	public function getShipState()
	{
		return $this->shipState;
	}

	/**
	 * @param string $shipState
	 */
	public function setShipState( $shipState )
	{
		$this->shipState = $shipState;
	}

	/**
	 * @return string
	 */
	public function getShipZip()
	{
		return $this->shipZip;
	}

	/**
	 * @param string $shipZip
	 */
	public function setShipZip( $shipZip )
	{
		$this->shipZip = $shipZip;
	}

	/**
	 * @return string
	 */
	public function getShipCountry()
	{
		return $this->shipCountry;
	}

	/**
	 * @param string $shipCountry
	 */
	public function setShipCountry( $shipCountry )
	{
		$this->shipCountry = $shipCountry;
	}

	/**
	 * @return string
	 */
	public function getShipMethod()
	{
		return $this->shipMethod;
	}

	/**
	 * @param string $shipMethod
	 */
	public function setShipMethod( $shipMethod )
	{
		$this->shipMethod = $shipMethod;
	}

	/**
	 * @return string
	 */
	public function getAssociateName()
	{
		return $this->associateName;
	}

	/**
	 * @param string $associateName
	 */
	public function setAssociateName( $associateName )
	{
		$this->associateName = $associateName;
	}

	/**
	 * @return string
	 */
	public function getItemNumber()
	{
		return $this->itemNumber;
	}

	/**
	 * @param string $itemNumber
	 */
	public function setItemNumber( $itemNumber )
	{
		$this->itemNumber = $itemNumber;
	}

	/**
	 * @return string
	 */
	public function getCsNotes()
	{
		return $this->csNotes;
	}

	/**
	 * @param string $csNotes
	 */
	public function setCsNotes( $csNotes )
	{
		$this->csNotes = $csNotes;
	}

	/**
	 * @return string
	 */
	public function getItemExtensionsub1()
	{
		return $this->itemExtensionsub1;
	}

	/**
	 * @param string $itemExtensionsub1
	 */
	public function setItemExtensionsub1( $itemExtensionsub1 )
	{
		$this->itemExtensionsub1 = $itemExtensionsub1;
	}

	/**
	 * @return string
	 */
	public function getItemExtensionsub2()
	{
		return $this->itemExtensionsub2;
	}

	/**
	 * @param string $itemExtensionsub2
	 */
	public function setItemExtensionsub2( $itemExtensionsub2 )
	{
		$this->itemExtensionsub2 = $itemExtensionsub2;
	}

	/**
	 * @return string
	 */
	public function getPersonalization1()
	{
		return $this->personalization1;
	}

	/**
	 * @param string $personalization1
	 */
	public function setPersonalization1( $personalization1 )
	{
		$this->personalization1 = $personalization1;
	}

	/**
	 * @return string
	 */
	public function getPersonalization2()
	{
		return $this->personalization2;
	}

	/**
	 * @param string $personalization2
	 */
	public function setPersonalization2( $personalization2 )
	{
		$this->personalization2 = $personalization2;
	}

	/**
	 * @return string
	 */
	public function getPersonalization3()
	{
		return $this->personalization3;
	}

	/**
	 * @param string $personalization3
	 */
	public function setPersonalization3( $personalization3 )
	{
		$this->personalization3 = $personalization3;
	}

	/**
	 * @return string
	 */
	public function getPersonalization4()
	{
		return $this->personalization4;
	}

	/**
	 * @param string $personalization4
	 */
	public function setPersonalization4( $personalization4 )
	{
		$this->personalization4 = $personalization4;
	}

	/**
	 * @return string
	 */
	public function getPersonalization5()
	{
		return $this->personalization5;
	}

	/**
	 * @param string $personalization5
	 */
	public function setPersonalization5( $personalization5 )
	{
		$this->personalization5 = $personalization5;
	}

	/**
	 * @return string
	 */
	public function getPersonalization6()
	{
		return $this->personalization6;
	}

	/**
	 * @param string $personalization6
	 */
	public function setPersonalization6( $personalization6 )
	{
		$this->personalization6 = $personalization6;
	}

	/**
	 * @return string
	 */
	public function getPersonalization7()
	{
		return $this->personalization7;
	}

	/**
	 * @param string $personalization7
	 */
	public function setPersonalization7( $personalization7 )
	{
		$this->personalization7 = $personalization7;
	}

	/**
	 * @return string
	 */
	public function getPersonalization8()
	{
		return $this->personalization8;
	}

	/**
	 * @param string $personalization8
	 */
	public function setPersonalization8( $personalization8 )
	{
		$this->personalization8 = $personalization8;
	}

	/**
	 * @return string
	 */
	public function getGeneralBirthstone()
	{
		return $this->generalBirthstone;
	}

	/**
	 * @param string $generalBirthstone
	 */
	public function setGeneralBirthstone( $generalBirthstone )
	{
		$this->generalBirthstone = $generalBirthstone;
	}

	/**
	 * @return string
	 */
	public function getBirthStone1()
	{
		return $this->birthStone1;
	}

	/**
	 * @param string $birthStone1
	 */
	public function setBirthStone1( $birthStone1 )
	{
		$this->birthStone1 = $birthStone1;
	}

	/**
	 * @return string
	 */
	public function getBirthStone2()
	{
		return $this->birthStone2;
	}

	/**
	 * @param string $birthStone2
	 */
	public function setBirthStone2( $birthStone2 )
	{
		$this->birthStone2 = $birthStone2;
	}

	/**
	 * @return string
	 */
	public function getBirthStone3()
	{
		return $this->birthStone3;
	}

	/**
	 * @param string $birthStone3
	 */
	public function setBirthStone3( $birthStone3 )
	{
		$this->birthStone3 = $birthStone3;
	}

	/**
	 * @return string
	 */
	public function getBirthStone4()
	{
		return $this->birthStone4;
	}

	/**
	 * @param string $birthStone4
	 */
	public function setBirthStone4( $birthStone4 )
	{
		$this->birthStone4 = $birthStone4;
	}

	/**
	 * @return string
	 */
	public function getBirthStone5()
	{
		return $this->birthStone5;
	}

	/**
	 * @param string $birthStone5
	 */
	public function setBirthStone5( $birthStone5 )
	{
		$this->birthStone5 = $birthStone5;
	}

	/**
	 * @return string
	 */
	public function getBirthStone6()
	{
		return $this->birthStone6;
	}

	/**
	 * @param string $birthStone6
	 */
	public function setBirthStone6( $birthStone6 )
	{
		$this->birthStone6 = $birthStone6;
	}

	/**
	 * @return string
	 */
	public function getBirthStone7()
	{
		return $this->birthStone7;
	}

	/**
	 * @param string $birthStone7
	 */
	public function setBirthStone7( $birthStone7 )
	{
		$this->birthStone7 = $birthStone7;
	}

	/**
	 * @return string
	 */
	public function getBirthStone8()
	{
		return $this->birthStone8;
	}

	/**
	 * @param string $birthStone8
	 */
	public function setBirthStone8( $birthStone8 )
	{
		$this->birthStone8 = $birthStone8;
	}

	/**
	 * @return string
	 */
	public function getOrderDate()
	{
		return $this->orderDate;
	}

	/**
	 * @param string $orderDate
	 */
	public function setOrderDate( $orderDate )
	{
		$this->orderDate = $orderDate;
	}

	/**
	 * @return string
	 */
	public function getSalesPerson()
	{
		return $this->salesPerson;
	}

	/**
	 * @param string $salesPerson
	 */
	public function setSalesPerson( $salesPerson )
	{
		$this->salesPerson = $salesPerson;
	}

	/**
	 * @return string
	 */
	public function getShipVia()
	{
		return $this->shipVia;
	}

	/**
	 * @param string $shipVia
	 */
	public function setShipVia( $shipVia )
	{
		$this->shipVia = $shipVia;
	}

	/**
	 * @return string
	 */
	public function getShipTocompany()
	{
		return $this->shipTocompany;
	}

	/**
	 * @param string $shipTocompany
	 */
	public function setShipTocompany( $shipTocompany )
	{
		$this->shipTocompany = $shipTocompany;
	}

	/**
	 * @return string
	 */
	public function getBatchNumber()
	{
		return $this->batchNumber;
	}

	/**
	 * @param string $batchNumber
	 */
	public function setBatchNumber( $batchNumber )
	{
		$this->batchNumber = $batchNumber;
	}

	/**
	 * @return string
	 */
	public function getPersonalization9()
	{
		return $this->personalization9;
	}

	/**
	 * @param string $personalization9
	 */
	public function setPersonalization9( $personalization9 )
	{
		$this->personalization9 = $personalization9;
	}

	/**
	 * @return string
	 */
	public function getPersonalization10()
	{
		return $this->personalization10;
	}

	/**
	 * @param string $personalization10
	 */
	public function setPersonalization10( $personalization10 )
	{
		$this->personalization10 = $personalization10;
	}

	/**
	 * @return string
	 */
	public function getPersonalization11()
	{
		return $this->personalization11;
	}

	/**
	 * @param string $personalization11
	 */
	public function setPersonalization11( $personalization11 )
	{
		$this->personalization11 = $personalization11;
	}

	/**
	 * @return string
	 */
	public function getPersonalization12()
	{
		return $this->personalization12;
	}

	/**
	 * @param string $personalization12
	 */
	public function setPersonalization12( $personalization12 )
	{
		$this->personalization12 = $personalization12;
	}

	/**
	 * @return string
	 */
	public function getPersonalization13()
	{
		return $this->personalization13;
	}

	/**
	 * @param string $personalization13
	 */
	public function setPersonalization13( $personalization13 )
	{
		$this->personalization13 = $personalization13;
	}

	/**
	 * @return string
	 */
	public function getPersonalization14()
	{
		return $this->personalization14;
	}

	/**
	 * @param string $personalization14
	 */
	public function setPersonalization14( $personalization14 )
	{
		$this->personalization14 = $personalization14;
	}

	/**
	 * @return string
	 */
	public function getPersonalization15()
	{
		return $this->personalization15;
	}

	/**
	 * @param string $personalization15
	 */
	public function setPersonalization15( $personalization15 )
	{
		$this->personalization15 = $personalization15;
	}

	public function __toString()
	{
		return (String)$this->getPoNumber();
	}


}

