<?php

    namespace App\Entity;

class Personnage {

    public $nom;
    public $age;
    public $sexe;
    public $caract=[];

    public static $personnages=[];

    public function __construct($nom, $age, $sexe, $caract)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->caract = $caract;
        self::$personnages[] = $this;

    }

    public static function creerPersonnage(){
        $j1 = new Personnage("Marc", 22, true, [
            "force"=>3,
            "agi"=>4,
            "intel"=>2
        ]);
        $j2 = new Personnage("Milo", 25, true, [
            "force"=>2,
            "agi"=>5,
            "intel"=>4
        ]);
        $j3 = new Personnage("Tya", 23, false, [
            "force"=>4,
            "agi"=>2,
            "intel"=>3
        ]);

    }

    public static function getPersonnageParNom($nom){
        foreach(self::$personnages as $perso){
           if(strtolower($perso->nom)  === $nom){
               return $perso;
           }
        }
    }

}

?>