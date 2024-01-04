<?php

class Membre 
{
    public $id=10;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo 'Instanciation de la classe Membre !<hr>';
    }

    public function inscription()
    {
        return 'Je m\'inscris !';
    }

    public function connexion()
    {
        return 'Je me connecte !';
    }

}

// Extends permet de faire de l'héritage, c'est à dire que la classe Admin hérite de la classe Membre. Elle récupère donc tout ce qui est public et protected de la classe Membre.
class Admin extends Membre
{
    public function accesBackOffice()
    {
        return 'Accès au BackOffice !';
    }
}

$admin = new Admin;
echo $admin->inscription() . '<br>';
echo $admin->connexion() . '<br>';
echo $admin->accesBackOffice() . '<br>';
echo 'ID : ' . $admin->id . '<br>';