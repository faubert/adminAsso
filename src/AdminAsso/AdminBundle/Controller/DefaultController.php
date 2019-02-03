<?php

namespace AdminAsso\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminAssoAdminBundle:Default:index.html.twig');
    }
}
