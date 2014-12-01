<?php

namespace Dexer\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemenagementController extends Controller
{
    
    /**
     * @Route("/demenagement", name="_demenagement")
     * @Template()
     */
    public function indexAction()
    {
    	return array();
    }
    
    /**
     * @Route("/home-demenagement", name="_home_demenagement")
     * @Template()
     */
    public function homeAction()
    {
    	return array();
    }
    
    /**
     * @Route("/test", name="_test")
     * @Template()
     */
    public function testAction()
    {
    	return array();
    }
}
