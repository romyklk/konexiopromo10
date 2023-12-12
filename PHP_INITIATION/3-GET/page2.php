<h1>PAGE 2</h1>

<?php

/* 
$_GET est une superglobale qui permet de récupérer les paramètres passés dans l'URL. 
Elle doit être écrite obligatoirement en majuscule.
Tout les superglobales sont des tableaux associatifs
$_GET est un tableau associatif
Puisse que c'est un tableau associatif, on peut utiliser la syntaxe suivante pour récupérer les paramètres : $_GET['cle'] ==> la clé est le nom du paramètre passé dans l'URL
*/

if($_GET)
{
    echo $_GET['article'] . '<br>';
    echo $_GET['prix'] . ' €<br>';
    echo $_GET['couleur'] . '<br>';
}else{
    echo 'Aucun paramètre dans l\'URL';
}