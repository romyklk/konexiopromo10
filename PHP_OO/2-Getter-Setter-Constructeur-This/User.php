<?php
/* 
TODO: Créez une classe User ayant la propriété private $prenom et un constructeur.Essayer de renseigner l'attribut prenom sans changer l'extérieur de la classe.
 */

class User
{
    private $prenom;

    public function __construct($prenom)
    {
        $this->setPrenom($prenom);
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}
$user = new User('John');

echo $user->getPrenom();
