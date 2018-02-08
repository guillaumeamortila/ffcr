<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pisteRepo = $em->getRepository('CRBundle:Piste');

        $pistes = $pisteRepo->findAll(['id' => 'desc']);


        return $this->render('CRBundle:Default:index.html.twig',[
            'pistes' => $pistes
        ]);
    }


}
