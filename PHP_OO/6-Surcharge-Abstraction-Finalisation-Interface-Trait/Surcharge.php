<?php

/* 
Surcharge ou Override est le fait de redéfinir une méthode héritée de la classe parente dans la classe enfant.

Elle permet de prendre en compte le comportement d'origine de la méthode et de le modifier dans la classe enfant.
*/

class A
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A 
{
    // On redéfinit la méthode calcul() de la classe parente A
    public function calcul()
    {
        // On surcharge la méthode calcul() de la classe parente A en utilisant le mot clé parent::nomDeLaMethode()
        // parent:: permet d'appeler une méthode de la classe dont on hérite.
        $nb = parent::calcul();

        if($nb <= 100)
        {
            return "Le nombre est inférieur ou égal à 100";
        }
        else
        {
            return "Le nombre est supérieur à 100";
        }
    }

    public function autreCalcul()
    {
        // On peut aussi surcharger une méthode sans redéfinir son comportement
        return parent::calcul();
        
    }
}

$b = new B;
echo $b->calcul() . "<br>";

echo $b->autreCalcul() . "<br>";