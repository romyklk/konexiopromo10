<?php

class Compteur 
{
    public static $nbInstanceClasse = 0;
    public $nbInstanceObjet = 0;

    public function __construct()
    {
        ++self::$nbInstanceClasse;
        ++$this->nbInstanceObjet;
    }
}

$c1 = new Compteur;
echo 'Nombre d\'instances de la classe : ' . Compteur::$nbInstanceClasse . '<br>';
echo 'Nombre d\'instances de l\'objet : ' . $c1->nbInstanceObjet . '<br>';
$c2 = new Compteur;
$c3 = new Compteur;
$c4 = new Compteur;
$c5 = new Compteur;
echo 'Nombre d\'instances de la classe : ' . Compteur::$nbInstanceClasse . '<br>';
echo 'Nombre d\'instances de l\'objet : ' . $c1->nbInstanceObjet . '<br>';
