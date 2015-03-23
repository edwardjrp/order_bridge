<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/17/15
 * Time: 5:15 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ReturnMethodHandlingsAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form
			->add("methodName", "text", array("label" => "Method Name"))
			->add("methodCode", "text", array("label" => "Method Code"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("methodName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("methodName")
			->add("methodCode")
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}

}

