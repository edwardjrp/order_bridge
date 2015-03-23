<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/17/15
 * Time: 3:21 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RetailersStatusesAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form->add("statusName", "text", array("label" => "Retailer Status"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("statusName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("statusName")
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}


}

