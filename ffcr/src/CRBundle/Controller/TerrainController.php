<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TerrainController extends Controller
{
    public function terrainAction()
    {
        return $this->render('CRBundle:Default:terrain.html.twig');
    }
}
