<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 2:34 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\EqualType;

class OrdersAdmin extends Admin
{

	/**
	 * @var array
	 * Default filter value for the grid
	 */
	protected $datagridValues = array(
		'status_id' => array(
			'type'  => EqualType::TYPE_IS_EQUAL, // => 1
			'value' => 1     // => 1
		)
	);

	protected function configureRoutes( RouteCollection $collection )
	{
		parent::configureRoutes( $collection ); // TODO: Change the autogenerated stub
		$collection->add('export_orders_erp', 'export_orders_erp');
		$collection->remove("create");
	}

	protected function configureShowFields( ShowMapper $filter )
	{
		$filter
			->with("Order Info", array("class" => "col-md-4"))
				->add("hub_order_id", "text", array("label" => "Order ID", "attr" => array("disabled" => "disabled") ))
				->add("merchant_order_id", "text", array("label" => "Merchant Order ID", "attr" => array("disabled" => "disabled")))
				->add("merchant_id", "text", array("label" => "Merchant ID", "attr" => array("disabled" => "disabled")))
				->add("merchant_vendor_id", "text", array("label" => "Merchant Vendor ID", "attr" => array("disabled" => "disabled")))
				->add("order_date", "date", array("label" => "Order Date"))
			->end()
			->with("Order Totals", array("class" => "col-md-6"))
				->add("order_item_count", "text", array("label" => "Items Count", "attr" => array("disabled" => "disabled")))
				->add("order_total", "text", array("label" => "Order Total", "attr" => array("disabled" => "disabled")))
				->add("sales_division", "text", array("label" => "Sales Division", "attr" => array("disabled" => "disabled")))
				->add("statusId", "entity", array( "label" => "Status", "required" => false, "class" => "BitxoneMainBundle:OrdersStatuses", "attr" => array("disabled" => "disabled")) )
			->end()
			->with("Order Details", array("class" => "col-md-4"))
			->add(
				"orderDetails",
				"sonata_type_collection",
				array('by_reference' => false, 'label' => 'Detail'), array(
		                    'edit' => 'inline',
		                    'sortable' => false,
		                    'inline' => 'table',
				)
			)
			->end();

			//->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			//->add("cssColor", "text", array("label" => "Css Color", "required" => false))
		;

		//parent::configureShowFields( $filter ); // TODO: Change the autogenerated stub
	}



	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter
			->add("hub_order_id")
			->add("merchant_order_id")
			->add("retailer_id", null, array("label" => "Retailer"))
			->add("status_id", null, array("label" => "Order Status"))
		;

	}

	protected function configureListFields( ListMapper $list )
	{

		//dump(parent::getTemplates());exit;

		$list
			->add("hub_order_id")
			->add("merchant_order_id")
			->add("merchant_id")
			->add("merchant_vendor_id")
			->add("order_date")
			->add("order_item_count", null, array("label" => "Items Count"))
			->add("order_total", null, array("label" => "Total"))
			->add("sales_division")
			->add("status_id.statusName", null, array( "label" => "Status"))
			->add("retailer_id.retailerName", null, array( "label" => "Retailer"))
			->add("updatedAt", "datetime")

			->add('_action', 'actions', array(
			            'actions' => array(
				            "show" => array()
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
			$actions["mark_item_asnew"] = array(
				"label" => "Mark as New Order",
				"ask_confirmation" => true
			);

			$actions["mark_item_asdownloaded"] = array(
				"label" => "Mark as Downloaded for ERP",
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
