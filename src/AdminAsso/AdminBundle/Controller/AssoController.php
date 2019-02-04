<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 04:17
 */

namespace AdminAsso\AdminBundle\Controller;


use AdminAsso\CoreBundle\Entity\Asso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AssoController extends Controller
{
    private function newForm()
    {
        $asso = new Asso();

        return $this->createForm($this->get('form.type.asso'), $asso)->createView();
    }

    public function indexAssoAction()
    {

    }
}