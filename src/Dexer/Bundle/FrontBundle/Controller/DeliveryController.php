<?php

namespace Dexer\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DeliveryController extends Controller
{
    
    /**
     * @Route("/livraison", name="_delivery")
     * @Template()
     */
    public function homeAction()
    {
    	return array();
    }
    
    /**
     * @Route("/test-livraison", name="_test_livraison")
     * @Template()
     */
    public function testAction()
    {
    	return array();
    }
    
}