<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function presentationAction()
    {
        return $this->render('CRBundle:Default:presentation.html.twig');
    }
}
