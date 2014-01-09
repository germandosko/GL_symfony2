<?php

namespace Acme\GraphicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeGraphicBundle:Default:index.html.twig', array('name' => $name));
    }
}
