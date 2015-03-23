<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 3/17/15
 * Time: 12:01 PM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OrderReturnReasonsAdmin extends Admin
{

	protected function configureFormFields( FormMapper $form )
	{
		$form
			->add("returnName", "text", array("label" => "Return Name"))
			->add("returnCode", "text", array("label" => "Return Code"))
			->add("iconName", "text", array("label" => "Icon Name", "required" => false))
			->add("cssColor", "text", array("label" => "Css Color", "required" => false));

	}

	protected function configureDatagridFilters( DatagridMapper $filter )
	{
		$filter->add("returnName");
	}

	protected function configureListFields( ListMapper $list )
	{
		$list
			->addIdentifier("returnName")
			->add("returnCode")
			->add("iconName")
			->add("cssColor")
			->add("updatedAt", "datetime");
	}

}

