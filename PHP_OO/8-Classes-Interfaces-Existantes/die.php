<?php

/* 
die() est une fonction qui permet d'arrêter l'exécution du script.
*/

function searchInArray($array, $search) {

    if (!is_array($array)) {
        die("Le premier paramètre doit être un tableau");
    }

    if (!is_string($search)) {
        die("Le second paramètre doit être une chaîne de caractères");
    }
    
    if(in_array($search, $array)) {
        echo "La valeur" .  $search . " existe dans le tableau" . "<br>";
    }
}

$tab = ["Poire", "Pomme", "Banane", "Orange"];

var_dump(searchInArray($tab, "Pomme"));
$tab1 = "Poire";
var_dump(searchInArray($tab1, "Fraise"));