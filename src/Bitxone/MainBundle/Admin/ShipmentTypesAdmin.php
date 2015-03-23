<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/17/15
 * Time: 4:50 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ShipmentTypesAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form->add("typeName", "text", array("label" => "Shipment Type"))
			->add("csvRecordType", "text", array("label" => "Record Type"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("typeName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("typeName")
			->add("csvRecordType")
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}


}

