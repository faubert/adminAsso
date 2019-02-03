<?php

namespace AdminAsso\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminAssoFrontBundle:Default:index.html.twig');
    }
}
