<?php
/**
 * Created by EdwardData
 * BlackCube Technologies 
 * Date: 2/18/15
 * Time: 11:15 AM
 * 
 */

namespace Bitxone\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OrdersStatusesAdmin extends Admin
{
	protected function configureFormFields( FormMapper $form )
	{
		$form->add("statusName", "text", array("label" => "Order Status"))
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
