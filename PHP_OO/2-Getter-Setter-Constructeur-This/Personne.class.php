<?php

class Personne
{
    private $nom;
    private $prenom;

    // __construct() est une méthode magique qui est appelée automatiquement lors de l'instanciation d'un objet de la classe Personne. L'utilité du constructeur est d'initialiser les propriétés de l'objet dès sa création. On peut y mettre des valeurs par défaut, ou bien des valeurs passées à l'instanciation de l'objet.
    
    // On ne peut pas avoir plusieurs constructeurs dans une même classe.
    public function __construct()
    {
        echo "Je suis le constructeur de la classe Personne";
    }

    // GETTER & SETTER(ACCESSEURS & MUTATEURS)

    // Le setter : C'est une méthode qui permet de modifier la valeur d'une propriété. On l'utilise pour écrire une valeur dans une propriété. Pour écrite un setter, il faut donner le même nom que la propriété avec le préfixe "set" devant, et avec une majuscule au premier caractère de la propriété.Le setter est une méthode public.

    public function setNom($n)
    {
        $n = strtolower($n);
        $n = trim($n);

        if(strlen($n) < 3 || strlen($n) > 20)
        {
            echo "Veuillez indiquer un nom entre 3 et 20 caractères";
        }else{
            // $this représente l'objet en cours de manipulation à l'intérieur de la classe. 
            $this->nom = $n;
        }
    }

    // Le getter : C'est une méthode qui permet de récupérer la valeur d'une propriété. On l'utilise pour lire une valeur dans une propriété. Pour écrire un getter, il faut donner le même nom que la propriété avec le préfixe "get" devant, et avec une majuscule au premier caractère de la propriété. Le getter est une méthode public.

    public function getNom()
    {
        return $this->nom;
    }

    // Exercice : Faire la même chose pour la propriété $prenom.

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

}

$personne = new Personne(); // instanciation de la classe Personne. 
echo "<br>";
$personne->setNom("Lévêque"); // On écrit dans la propriété $nom grâce au setter setNom().
$personne->setPrenom("Julien"); // On écrit dans la propriété $prenom grâce au setter setPrenom().

echo "Je m'appelle " . $personne->getNom() . " " . $personne->getPrenom() . "."; // On lit la propriété $nom grâce au getter getNom().