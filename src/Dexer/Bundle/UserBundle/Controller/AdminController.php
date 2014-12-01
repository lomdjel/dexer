<?php

namespace Dexer\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="_admin")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => $this->getUser()->getUsername());
    }
}
