<?php

namespace FWS\Bundle\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FWSConfigBundle:Default:index.html.twig');
    }
}
