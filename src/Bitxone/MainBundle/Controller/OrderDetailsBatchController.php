<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/18/15
 * Time: 12:31 PM
 * 
 */

namespace Bitxone\MainBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OrderDetailsBatchController extends Controller
{

	public function batchActionMarkItemReship( ProxyQueryInterface $query )
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
				$this->get( "bitxone.main_manager" )->markItemReship( $item );

			}

		   $this->addFlash("sonata_flash_success", "The selected items were sucessfully mark for re-shipping");

		} catch(ModelManagerException $e)
		{
			$this->addFlash("sonata_flash_error", "Error processing the selected items to be re-shipped, please try again.");
		}


		return new RedirectResponse($this->admin->generateUrl("list", array("filter" => $this->admin->getFilterParameters())));

	}

}

