<?php
/* 
Une classe finale est une classe qui ne peut pas être héritée, c'est-à-dire qu'on ne peut pas créer de classe enfant à partir d'une classe finale.

Le but d'une classe finale est de verrouiller une classe pour qu'elle ne puisse pas être modifiée par des classes enfants.

Pour déclarer une classe finale, on utilise le mot clé final devant le mot clé class.

Une classe finale peut contenir des méthodes finales et des méthodes normales. 

Une méthode finale est une méthode qui ne peut pas être redéfinie par les classes enfants.
*/

final class Application
{
    public function run()
    {
        return 'L\'application se lance !';
    }
}

//class A extends Application{}  Erreur : on ne peut pas hériter d'une classe finale

$app = new Application; // la classe Application peut être instanciée 

echo $app->run() . '<br>'; // L'application se lance !

class Application2
{
    final public function run()
    {
        return 'L\'application se lance !';
    }
}

class Extension extends Application2
{
   // public function run(){} Erreur : on ne peut pas surcharger une méthode finale
}

////////
echo '<hr>';
final class Recette 
{
    public function ingredients()
    {
        echo'Les ingrédients de la recette sont : huile, oeufs, farine, sucre, levure, chocolat <br>';
    }
}

//class Menu extends Recette {} // Erreur : on ne peut pas hériter d'une classe finale

$recette = new Recette;
$recette->ingredients();

class Cuisson 
{
    final public function tempsDeCuisson()
    {
        echo 'Le temps de cuisson est de 30 minutes <br>';
    }

    public function temperature()
    {
        echo 'La température est de 180° <br>';
    }
}

class CuissonFour extends Cuisson
{
    //public function tempsDeCuisson(){} // Erreur : on ne peut pas surcharger une méthode finale

    public function temperature()
    {
        echo 'La température est de 200° <br>';
    }
}

$four = new CuissonFour;
$four->tempsDeCuisson();
$four->temperature();