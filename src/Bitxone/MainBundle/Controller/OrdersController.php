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

}
