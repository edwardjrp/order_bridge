<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/24/15
 * Time: 5:08 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;


class InventoriesAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form
			->add("retailerId", "entity", array( "label" => "Retailer", "required" => false, "class" => "BitxoneMainBundle:Retailers") )
			->add("description", "text", array("label" => "Description"))
			->add("itemNo", "text", array("label" => "Item No."))
			->add("bItem", "text", array("label" => "B Item", "required" => false))
			->add("status", "text", array("label" => "Status", "required" => false))
			->add("metal", "text", array("label" => "Metal", "required" => false))
			->add("cost", "text", array("label" => "Cost"))
			->add("upcCode", "text", array("label" => "UPC Code"))
			->add("weight", "text", array("label" => "Weight", "required" => false))
			->add("sku", "text", array("label" => "Sku"))
			->add("qty", "text", array("label" => "Quantity"))
		;

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter
			->add("retailerId", null, array("label" => "Retailer"))
			->add("description")
			->add("itemNo")
			->add("sku")
			->add("upcCode")
		;

	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("itemNo")
			->add("description", null, array("label" => "Description"))
			->add("cost", null, array("label" => "cost"))
			->add("qty")
			->add("weight")
			->add("bItem")
			->add("upcCode")
			->add("sku")
			->add("retailerId.retailerName", null, array( "label" => "Retailer"))
			->add("updatedAt", "datetime")
		;
	}
}

