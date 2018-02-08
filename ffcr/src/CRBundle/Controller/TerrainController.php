<?php

namespace CRBundle\Controller;

use CRBundle\Entity\Piste;
use CRBundle\Form\PisteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TerrainController extends Controller
{
    public function terrainAction(Request $request)
    {

        $piste = new Piste;
        $form = $this->get('form.factory')->create(PisteType::class, $piste);

        $em = $this->getDoctrine()->getManager();
        $pisteRepo = $em->getRepository('CRBundle:Piste');
        $pistes = $pisteRepo->findAll(['id' => 'desc']);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($piste);
                $em->flush();
            }
        }

        return $this->render('CRBundle:Default:terrain.html.twig', [
            'newPisteForm' => $form->createView(),
            'pistes' => $pistes
        ]);

    }
}
