<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Offre;
use AppBundle\Form\OffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OffreController extends Controller
{

    /**
     *
     * @Route("/add", name="addOffre")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function addAction()
    {
        //On crée une nouvelle offre
        $offre = new Offre();

        //On récupère le form
        $form = $this->createForm(OffreType::class, $offre);

        //On génére le fichier final
        $formView = $form->createView();

        //on rend la vue
        return $this->render('offreAdd.html.twig', array('form'=>$formView));

    }
}
