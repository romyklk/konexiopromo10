<?php

/* 
__clone est méthode magique qui est appelée lorsqu'on fait un clone de l'objet.

Cela va nous permettre de faire une copie de l'objet en conservant les mêmes valeurs de propriétés.

Nous allons pouvoir modifier les propriétés de l'objet cloné sans modifier l'objet original.

*/

class Personne 
{
    public $nom;
    public $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function showDetails()
    {
        echo "Je suis $this->nom et j'ai $this->age ans.<hr>";
    }

    public function __clone()
    {
        $this->nom = "Dupont";
    }
}

$personne1 = new Personne("Lior", 25);

$personne1->showDetails();

echo "<hr>";
//clone permet de faire une copie de l'objet en conservant les mêmes valeurs de propriétés
$personne2 = clone $personne1;
$personne2->age = 30;

$personne2->showDetails();