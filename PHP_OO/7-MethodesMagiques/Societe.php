<?php
/* 
Une méthode magique est une méthode qui est appelée automatiquement par PHP en fonction de l'action que l'on fait sur l'objet.
*/

class Societe 
{
    public $adresse;
    public $ville;
    public $cp;

    // Méthode magique appellée au moment de l'instanciation
    public function __construct()
    {
    }

    //__set() est appelée lorsqu'on tente d'affecter une valeur à une propriété qui n'existe pas
    public function __set($nom, $valeur)
    {
        echo "La propriété $nom n'existe pas, la valeur $valeur n'a donc pas été affectée !<hr>";
    }

    //__get() est appelée lorsqu'on tente d'afficher une propriété qui n'existe pas

    public function __get($nom)
    {
        echo "La propriété $nom n'existe pas, on ne peut donc pas l'afficher !<hr>";
    }

    //__call() est appelée lorsqu'on tente d'appeler une méthode qui n'existe pas

    public function __call($nom, $arguments)
    {
        echo "Tentative d'exécution de la méthode $nom mais elle n'existe pas. Les arguments étaient " . implode('-', $arguments) . "<hr>";
    }

    //__callStatic() est appelée lorsqu'on tente d'appeler une méthode static qui n'existe pas

    public static function __callStatic($nom, $arguments)
    {
        echo "Tentative d'exécution de la méthode static $nom mais elle n'existe pas. Les arguments étaient " . implode('-', $arguments) . "<hr>";
    }

    //__toString() est appelée lorsqu'on tente d'afficher l'objet directement avec echo ou print

    public function __toString()
    {
        return "Les infos de la société". "<br>Adresse : " . $this->adresse . "<br>Code postal : " . $this->cp . "<br>Ville : " . $this->ville . "<hr>";
    }
}

//https://www.php.net/manual/fr/language.oop5.magic.php pour plus de méthodes magiques

$societe = new Societe;
$societe->adresse = "22 rue du PHP"; 
$societe->cp = "75000";
$societe->ville = "Montreuil";
$societe->villes = "Paris"; // La propriété villes n'existe pas, la valeur Paris n'a donc pas été affectée !

echo $societe->titre; // La propriété titre n'existe pas, on ne peut donc pas l'afficher !

$societe->methodeInexistante("arg1", "arg2", "arg3"); // Tentative d'exécution de la méthode methodeInexistante mais elle n'existe pas. Les arguments étaient arg1-arg2-arg3

Societe::methodeStaticInexistante("arg1", "arg2", "arg3"); // Tentative d'exécution de la méthode static methodeStaticInexistante mais elle n'existe pas. Les arguments étaient arg1-arg2-arg3

echo $societe; // Impossible d'afficher l'objet directement !