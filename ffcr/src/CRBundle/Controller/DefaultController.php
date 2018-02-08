<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pisteRepo = $em->getRepository('CRBundle:Piste');



        $pistes = $pisteRepo->findAll(['date' => 'desc']);
        /*$query = $em->createQuery(
            'SELECT *
        FROM CRBundle\Entity\Courses p
        WHERE p.price > :price
        ORDER BY p.price ASC'
        )->setParameter('price', 10);

        // returns an array of Product objects
        $pistes = $query->execute();*/


        return $this->render('CRBundle:Default:index.html.twig',[
            'pistes' => $pistes
        ]);
    }


}
