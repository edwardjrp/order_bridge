<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/25/15
 * Time: 11:55 AM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OrderCancelationReasonsAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form
			->add("reasonName", "text", array("label" => "Reason Name"))
			->add("cancelCode", "text", array("label" => "Cancel Code"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("reasonName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("reasonName")
			->add("cancelCode")
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}


}

