<?php

namespace Bitxone\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/", name="main_home")
     * @Template("BitxoneMainBundle:Main:index.html.twig")
     */
    public function indexAction()
    {
	    $returnOptions = array("header_option" => "main_home");

	    return $returnOptions;

    }

}
