<?php
class Voiture 
{
    // Static permet de dire que la propriété appartient à la classe et non à l'objet
    private static $marque = "BMW";
    private $couleur = "Noir";
    private static $modele = "X6";

    // GETTER
    // Puisse que la propriété est static,elle appartieny à la classe et non à l'objet. La classe à l'intérieur d'elle même est représenté par self::
    // self:: permet d'accéder à une propriété static
    // L'objet à l'intérieur de la classe est représenté par $this->
    public function getMarque()
    {
        return self::$marque; // Permet d'accéder à la propriété static $marque
    }

    public function getCouleur()
    {
        return $this->couleur; // Permet d'accéder à la propriété $couleur
    }

    // Méthode static
    public static function getModele()
    {
        return self::$modele; // Permet d'accéder à la propriété static $modele
    }

    // SETTER

    public function setMarque($marque)
    {
        self::$marque = $marque; // Permet de modifier la propriété static $marque
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur; // Permet de modifier la propriété $couleur
    }

    public static function setModele($modele)
    {
        self::$modele = $modele; // Permet de modifier la propriété static $modele
    }
}

// Création d'un objet
$voiture1 = new Voiture;
var_dump($voiture1); 

var_dump(get_class_methods($voiture1)); // Permet d'afficher les méthodes de la classe Voiture
// Affichage :
echo "La voiture 1 est de marque " . $voiture1->getMarque() ." " . Voiture::getModele() . " et de couleur " . $voiture1->getCouleur() . "<br>";

// Création d'un objet
$voiture2 = new Voiture;
$voiture2->setMarque("Mercedes");
$voiture2->setModele("Classe A");
$voiture2->setCouleur("Rouge");
echo "La voiture 2 est de marque " . $voiture2->getMarque() ." " . Voiture::getModele() . " et de couleur " . $voiture2->getCouleur() . "<br>";
echo"<hr>";
echo "La voiture 1 est de marque " . $voiture1->getMarque() . " " . Voiture::getModele() . " et de couleur " . $voiture1->getCouleur() . "<br>";