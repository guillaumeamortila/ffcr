<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRBundle:Default:index.html.twig');
    }


}
