<?php

namespace Dexer\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Bundle;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
	/**
	 * @Route("/login", name="login")
	 * @Template()
	 */
	public function loginAction()
	{
		
		// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    /* if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	      return $this->redirect($this->generateUrl('sdzblog_accueil'));
	    } */
	
	    $request = $this->getRequest();
	    $session = $request->getSession();
	    
	    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	    	$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    } else {
	    	$error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
	    }
	
	   /*  // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
	    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    } else {
	      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
	    } */
	
	    return $this->render('DexerUserBundle:Security:login.html.twig', array(
	      // Valeur du précédent nom d'utilisateur entré par l'internaute
	      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
	      'error'         => $error,
	    ));
	}
}