<?php 

namespace App\Entity;

Class Arme {


    private $nom;
    private $description;
    private $degat;

    public static $armes = [];

    public function __construct($nom, $description, $degat){
        $this->nom=$nom;
        $this->description=$description;
        $this->degat=$degat;
        self::$armes[]=$this;
    }
   
    public function getNom(){
        return $this->nom;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getDegat(){
        return $this->degat;
    }


    public static function creeArmes(){
        $arme1 = new Arme("epee", "très tranchante", 4);
        $arme2 = new Arme("arc", "arme de distance", 5);
        $arme3 = new Arme("hache", "très puissante", 3);
    }

    /* public function retireAccent($mot){
        $aRechercher=["é", "è", "â", "ê"];
        $aRemettre=["e", "e", "a", "e"];
        $motModifie = str_replace($aRechercher, $aRemettre, $mot);
        return $motModifie;
        
    } */


}

?>