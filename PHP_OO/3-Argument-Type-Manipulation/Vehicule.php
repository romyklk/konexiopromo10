<?php

/* 

UML:
---------------------
|    Vehicule		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence()	|
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence()	|
|donnerEssence()	|
---------------------
1. Création d'un véhicule 1
2. Attribuer un nombre de litres d'essence au vehicule 1 : 5Litres
3. Afficher le nombre de litres d'essence du vehicule 1
4. Création d'une pompe
5. Attribuer un nombre de litres d'essence à la pompe : 800
6. Afficher le nombre de litres d'essence de la pompe
7. la pompe donne de l'essence en faisant le plein (50L) à la voiture1
8. Afficher le nombre de litres d'essence pour la voiture1 après ravitaillement
9. Afficher nombre de litres d'essence restant pour la pompe
10. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence (limite reservoir). 
*/

class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($litresEssence)
    {
        if (is_int($litresEssence)) {
            $this->litresEssence = $litresEssence;
        }
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
}

class Pompe
{
    private $litresEssence;

    public function setLitresEssence($litresEssence)
    {
        if (is_int($litresEssence)) {
            $this->litresEssence = $litresEssence;
        }
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }


    public function donnerEssence(Vehicule $v)
    {
        $this->setLitresEssence($this->getLitresEssence() - (50 - $v->getLitresEssence()));

        $v->setLitresEssence($v->getLitresEssence() + (50 - $v->getLitresEssence()));
    }
}

$vehicule1 = new Vehicule();

$vehicule1->setLitresEssence(5);

echo "Le vehicule 1 contient " . $vehicule1->getLitresEssence() . " litres d'essence.<br>";

$pompe = new Pompe();

$pompe->setLitresEssence(800);

echo "La pompe contient " . $pompe->getLitresEssence() . " litres d'essence.<br>";

$pompe->donnerEssence($vehicule1);

echo "Le vehicule 1 contient " . $vehicule1->getLitresEssence() . " litres d'essence.<br>";

echo "La pompe contient " . $pompe->getLitresEssence() . " litres d'essence.<br>";