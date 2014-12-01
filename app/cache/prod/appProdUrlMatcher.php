<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\AdminController::indexAction',  '_route' => '_admin',);
        }

        if (0 === strpos($pathinfo, '/hello')) {
            // dexer_user_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dexer_user_default_index')), array (  '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

            // dexer_front_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dexer_front_default_index')), array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DefaultController::homeAction',  '_route' => '_home',);
        }

        // _delivery
        if ($pathinfo === '/livraison') {
            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DeliveryController::homeAction',  '_route' => '_delivery',);
        }

        // _test_livraison
        if ($pathinfo === '/test-livraison') {
            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DeliveryController::testAction',  '_route' => '_test_livraison',);
        }

        // _demenagement
        if ($pathinfo === '/demenagement') {
            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::indexAction',  '_route' => '_demenagement',);
        }

        // _home_demenagement
        if ($pathinfo === '/home-demenagement') {
            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::homeAction',  '_route' => '_home_demenagement',);
        }

        // _test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::testAction',  '_route' => '_test',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
