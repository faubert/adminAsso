<?php

namespace AdminAsso\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminAssoCoreBundle:Default:index.html.twig');
    }
}
