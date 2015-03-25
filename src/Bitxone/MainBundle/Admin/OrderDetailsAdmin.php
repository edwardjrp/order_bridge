<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/25/15
 * Time: 1:13 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Doctrine\ORM\EntityRepository;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class OrderDetailsAdmin extends Admin
{
	public function getPersistentParameters()
	{
		//return parent::getPersistentParameters();
		$result = array();

		if (!$this->getRequest())
		{
			return $result;
		}

		$request = $this->getRequest();
		$uniqId       = $this->getUniqid();
		$formPost     = $request->request->get( $uniqId );

		$isReturnPost = 0;
		if ( ($formPost) && (array_key_exists("return", $formPost)) )
			$isReturnPost = (int)$formPost[ "return" ];

		if ( $isReturnPost )
		{
			$result = array(
				"return" => $isReturnPost
			);

		}

		/**
		 * Check if the botton clicked was btn_update_and_list to remove the return=1 param from the
		 * request uri since is not needed and only used when returning an order
		 */
		$returnToList = $request->request->has("btn_update_and_list");
		if ($returnToList)
		{
			$result = array();
		}

		return $result;

	}


	protected function configureFormFields( FormMapper $form )
	{
		$uniqId = $this->getUniqid();
		$isReturn = (int)$this->getRequest()->get("return",0);
		$formPost = $this->getRequest()->request->get($uniqId);

		$isReturnPost = 0;
		if ( ($formPost) && (array_key_exists("return", $formPost)) )
			$isReturnPost = (int)$formPost["return"];

		if ( ($isReturn) || ($isReturnPost) )
		{
			$form->add(
				"statusId",
				"entity",
				array( "label" => "Status", "required" => true, "class" => "BitxoneMainBundle:OrdersStatuses",
			       "query_builder" => function(EntityRepository $er)
					{
						return $er->createQueryBuilder("a")
							->where("a.id = :id")
							->setParameter("id", 7);
					},
				)
			)
			->add("returnReasonId", "entity", array( "label" => "Return Reason", "required" => true, "class" => "BitxoneMainBundle:OrderReturnReasons") )
			->add("returnMethodHandlingId", "entity", array( "label" => "Return Method Handling", "required" => true, "class" => "BitxoneMainBundle:ReturnMethodHandlings") )
			->add("returnDate", "date", array( "label" => "Return Date", "required" => true, "data" => new \DateTime("now")) )
			->add("return", "hidden", array( "data" => "1", "mapped" => false) )
			;

		} else
		{
			$form
				->add(
					"statusId",
					"entity",
					array( "label" => "Status", "required" => true, "class" => "BitxoneMainBundle:OrdersStatuses",
				       "query_builder" => function(EntityRepository $er)
						{
							return $er->createQueryBuilder("a")
								->where("a.id = :id")
								->setParameter("id", 4);
						},
					)
				)
				->add("cancelReasonId", "entity", array( "label" => "Cancel Reason", "required" => true, "class" => "BitxoneMainBundle:OrderCancelationReasons") )
			;

		}
	}



	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter
			->add("merchant_sku", null, array("label" => "SKU"))
			->add("merchant_order_id", null, array("label" => "Order ID"))
			->add("status_id", null, array("label" => "Status"))
		;

	}

	protected function configureRoutes( RouteCollection $collection )
	{
		//parent::configureRoutes( $collection );
		$collection->remove("create");
		$collection->add("return", $this->getRouterIdParameter()."/edit");
	}


	protected function configureListFields( ListMapper $list )
	{

		//dump(parent::getTemplates());exit;

		$list
			->add("merchant_order_id", null, array("label" => "Order ID"))
			->add("merchant_line_item_number", null, array("label" => "Item No."))
			//->add("merchant_sku")
			->add("vendor_sku")
			->add("description")
			->add("quantity")
			->add("unit_cost")
			->add("line_merchandise_cost", null, array("label" => "Total Cost") )
			->add("personalization_data")
			->add("status_id.statusName", null, array( "label" => "Status"))
			->add("cancelReasonId", null, array( "label" => "Cancel Reason"))
			->add("returnReasonId", null, array( "label" => "Return Reason"))
			//->add("returnDate", "datetime", array( "label" => "Return Date"))
			//->add("updatedAt", "datetime")

			->add('_action', 'actions', array(
			            'actions' => array(
			                'Return' => array(
			                    'template' => 'BitxoneMainBundle:CRUD:list_action_return.html.twig'
			                )
			            )
			        ))


		;
	}

	public function getBatchActions()
	{
		//return parent::getBatchActions();
		$actions = array();

		if ( $this->hasRoute( "edit" ) && $this->isGranted( "EDIT" ) )
		{
			$actions["mark_item_reship"] = array(
				"label" => "Mark Item for Re-Shipping",
				"ask_confirmation" => true
			);

/*
			$actions["location_receive"] = array(
				"label" => "Receive Orders",
				"ask_confirmation" => true
			);

			$actions["location_forward"] = array(
				"label" => "Forward Orders to Destination",
				"ask_confirmation" => true
			);
*/

		}

		return $actions;

	}


}

