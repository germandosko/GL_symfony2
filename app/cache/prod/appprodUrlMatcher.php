<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Acme\\GraphicBundle\\Controller\\ControlController::indexAction',  '_route' => '_index',);
        }

        // _contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Acme\\GraphicBundle\\Controller\\ControlController::contactAction',  '_route' => '_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
