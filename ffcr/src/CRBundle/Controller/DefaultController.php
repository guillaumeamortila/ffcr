<?php

namespace CRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //$pisteRepo = $em->getRepository('CRBundle:Piste');



        //$pistes = $pisteRepo->findAll(['date' => 'desc']);
        /*$query = $em->createQuery(
            'SELECT *
        FROM piste p
        WHERE p.date > NOW()
        ORDER BY p.date DESC'
        );
        // returns an array of Product objects
        $pistes = $query->execute();*/

        $conn = $em->getConnection();

        $sql = '
        SELECT *
        FROM piste p
        WHERE p.date > NOW()
        ORDER BY p.date DESC
        ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $pistes = $stmt->fetchAll();




        return $this->render('CRBundle:Default:index.html.twig',[
            'pistes' => $pistes
        ]);
    }


}
