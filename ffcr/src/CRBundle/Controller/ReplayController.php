<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReplayController extends Controller
{
    public function replayAction()
    {
        return $this->render('CRBundle:Default:replay.html.twig');
    }
}
