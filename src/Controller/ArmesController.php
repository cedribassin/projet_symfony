<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
            //On envoie les info suivantes à notre vue:
            "armes"=>Arme::$armes
        ]);
    }

     /**
     * @Route("/arme/{nom}", name="afficherArme")
     */
     public function afficherPersonnage($nom)
    {
        Arme::creeArmes();
        //On récupère une arme en créant la fonction getArmeParNom()
        $arme = Arme:: getArmeParNom($nom);
        return $this->render('arme/arme.html.twig',[
            //On renvoie dans cette vue l'arme qui aura été sélectionnée (grâce à
            // la fonction getArmeParNom($nom) de la classe Arme )
            "arme"=>$arme
        ]);
    } 
}
