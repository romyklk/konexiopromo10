<?php

// $data représente le nom du fichier dans lequel on veut lire les données.
$data = 'users.txt';

// file() permet de lire un fichier et de retourner son contenu dans un tableau. Chaque ligne du fichier sera une case du tableau.
$dataTab = file($data);

// On parcourt le tableau $dataTab avec une boucle foreach et on affiche chaque ligne du tableau.
foreach ($dataTab as  $value) {
    echo $value . '<br>';   
}