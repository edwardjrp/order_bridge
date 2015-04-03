<?php

namespace Bitxone\MainBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Symfony\Component\Finder\Exception\AccessDeniedException;



class OrdersController extends Controller
{
    public function exportOrdersErpAction()
    {


	    $fileExport = $this->get("bitxone.main_manager")->exportNewOrdersCSV();

	    if ($fileExport)
	    {

		    $response = new BinaryFileResponse( $fileExport );
		    $response->trustXSendfileTypeHeader();
		    $filename = basename( $fileExport );
		    $response->setContentDisposition( ResponseHeaderBag::DISPOSITION_ATTACHMENT, $filename );

		    //$this->addFlash('sonata_flash_success', 'CSV file has been generated.');

		    return $response;

	    }


	    //$this->addFlash('sonata_flash_error', 'There are no new orders to generate ERP CSV file.');

	    return new RedirectResponse($this->admin->generateUrl('list'));
    }

	public function batchActionMarkItemAsnew( ProxyQueryInterface $query )
	{
		if (false === $this->admin->isGranted("EDIT"))
		{
			throw new AccessDeniedException();
		}

//		$parameterBag = $this->get("request")->request;
//		$formInputs = $parameterBag->get("locationbatch");
//		$recipientId = $formInputs["recipientId"];


		try
		{
			foreach ($query->execute() as $item)
			{
				/**
				 * Processing the location send action for each order
				 */
				$this->get( "bitxone.main_manager" )->markItemAsnew( $item );

			}

		   $this->addFlash("sonata_flash_success", "The selected items were successfully marked as new orders");

		} catch(ModelManagerException $e)
		{
			$this->addFlash("sonata_flash_error", "Error processing the selected items to be marked as new orders, please try again.");
		}


		return new RedirectResponse($this->admin->generateUrl("list", array("filter" => $this->admin->getFilterParameters())));

	}

	public function batchActionMarkItemAsdownloaded( ProxyQueryInterface $query )
	{
		if (false === $this->admin->isGranted("EDIT"))
		{
			throw new AccessDeniedException();
		}

//		$parameterBag = $this->get("request")->request;
//		$formInputs = $parameterBag->get("locationbatch");
//		$recipientId = $formInputs["recipientId"];


		try
		{
			foreach ($query->execute() as $item)
			{
				/**
				 * Processing the location send action for each order
				 */
				$this->get( "bitxone.main_manager" )->markItemAsdownloaded( $item );

			}

		   $this->addFlash("sonata_flash_success", "The selected items were successfully marked as downloaded for erp");

		} catch(ModelManagerException $e)
		{
			$this->addFlash("sonata_flash_error", "Error processing the selected items to be marked as downloaded for erp, please try again.");
		}


		return new RedirectResponse($this->admin->generateUrl("list", array("filter" => $this->admin->getFilterParameters())));

	}

}
