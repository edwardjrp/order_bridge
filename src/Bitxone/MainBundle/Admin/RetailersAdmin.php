<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 10:43 AM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RetailersAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form->add("retailerName", "text", array("label" => "Retailer"))
			->add("remoteFolderName", "text", array("label" => "Remote Folder"))
			->add("erpCustomCode", "text", array("label" => "Custon Code"))
			->add("salesPerson", "text", array("label" => "Sales Person"))
			->add("statusId", "entity", array( "label" => "Status", "required" => false, "class" => "BitxoneMainBundle:RetailersStatuses") )
			->add("shipmentTypeId", "entity", array( "label" => "Shipment Type", "required" => false, "class" => "BitxoneMainBundle:ShipmentTypes"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("retailerName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("retailerName")
			->add("remoteFolderName", null, array("label" => "Remote Folder"))
			->add("erpCustomCode", null, array("label" => "Custom Code"))
			->add("salesPerson")
			->add("statusId.statusName", null, array( "label" => "Status"))
			->add("shipmentTypeId.typeName", null, array( "label" => "Shipment Type"))
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}


}
