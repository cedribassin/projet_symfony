<?php 

namespace App\Entity;

Class Arme {

    private $nom;
    private $description;
    private $degat;

    //Tableau qui récupère les armes créées
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


    //Fonction qui permet de créer des armes (utile sans base de donnée)
    public static function creeArmes(){
        //dans la mesure ou les armes sont stockées directement dans $armes;
        // il n'est pas utile de les stocker dans des variables
        new Arme("épée", "très tranchante", 4);
        new Arme("arc", "arme de distance", 5);
        new Arme("hache", "très puissante", 3);
    }

    //Fonction qui permet de récupérer une arme en fonction de son nom
    public static function getArmeParNom($nom){
        foreach(self::$armes as $arme){
            //La fontion strtolower() permet de mettre les lettres en minuscule
            //La fonction str_replace de chercher les é, de les remplacer par e au niveau
            // des noms d'armes
            if(strtolower(str_replace("é", "e", $arme->nom)) === $nom){
                return $arme;
            }
        }
    }
}

?>