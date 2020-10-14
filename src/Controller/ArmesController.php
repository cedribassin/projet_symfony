<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/arme", name="arme")
     */
    public function armes()
    {
        Arme::creeArmes();
        return $this->render('arme/armes.html.twig', [
            "armes"=>Arme::$armes
        ]);
    }

     /**
     * @Route("/persos/{nom}", name="afficherPersonnage")
     */
    /* public function afficherPersonnage($nom)
    {
        Personnage::creerPersonnage();
        //On récupère un personnage en créant la fonction getPersonnageParNom()
        $personnage = Personnage:: getPersonnageParNom($nom);
        return $this->render('personnage/perso.html.twig',[
            "perso"=>$personnage
        ]);
    } */
}
