<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'dexer_user_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'dexer_front_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        '_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_delivery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DeliveryController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livraison',    ),  ),  4 =>   array (  ),),
        '_test_livraison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DeliveryController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test-livraison',    ),  ),  4 =>   array (  ),),
        '_demenagement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demenagement',    ),  ),  4 =>   array (  ),),
        '_home_demenagement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home-demenagement',    ),  ),  4 =>   array (  ),),
        '_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\FrontBundle\\Controller\\DemenagementController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dexer\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
