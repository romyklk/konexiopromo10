<?php
/* 
Un pattern ou patron de conception est une solution à un problème de conception récurrent.

Le pattern Singleton est un patron de conception permettant de restreindre l'instanciation d'une classe à un seul objet.

En d'autres termes, le pattern Singleton permet de créer une classe qui ne pourra être instanciée qu'une seule fois et dont l'objet pourra être récupéré à chaque fois que nécessaire.

Par exemple pour la connexion à une base de données,on peut utiliser ce pattern pour éviter de créer plusieurs objets de connexion à la base de données.

*/

class Singleton 
{
    // Propriété static qui contiendra l'instance unique de la classe
    private static $instance = null;

    // Constructeur privé pour empêcher l'instanciation de la classe depuis l'extérieur. Donc on ne pourra pas faire new Singleton depuis l'extérieur
    private function __construct() {}

    // Méthode privée pour empêcher la duplication de l'objet
    private function __clone() {}

    public static function getInstance()
    { // Je vérifie si l'instance est null, si c'est le cas, je crée un objet de la classe Singleton et je le stocke dans la propriété static $instance
        if(is_null(self::$instance))
        {
            self::$instance = new Singleton();
            // self::$instance = new Self() ; Self est un mot clé qui permet de faire référence à la classe dans laquelle on se trouve (ici Singleton)
        }
        // Je retourne l'instance de la classe Singleton
        return self::$instance;
    }
}

$obj = Singleton::getInstance();
var_dump($obj);

$obj2 = Singleton::getInstance();
var_dump($obj2);

