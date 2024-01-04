<?php

/* 
Une classe abstraite est une classe qui ne peut pas être instanciée, c'est-à-dire qu'on ne peut pas créer d'objets à partir d'une classe abstraite.

Une méthode abstraite , est une méthode qui n'a de corps, c'est-à-dire qu'elle n'a pas de contenu, elle est vide. Elle ne peut être déclarée que dans une classe abstraite. Elle doit obligatoirement être redéfinie dans les classes enfants.

Une classe abstraite peut contenir des méthodes abstraites et des méthodes normales. Une classe abstraite peut contenir des propriétés.

Pour déclarer une classe abstraite, on utilise le mot clé abstract devant le mot clé class.
*/

abstract class Joueur
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }

    // Déclaration d'une méthode abstraite
    abstract public function etreMajeur();
}

// $joueur1 = new Joueur;  Erreur : on ne peut pas instancier une classe abstraite


class JoueurFr extends Joueur
{
    // Obligation de redéfinir la méthode abstraite etreMajeur() de la classe parente
    public function etreMajeur()
    {
        return 18;
    }
}

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter() . '<br>'; // 18