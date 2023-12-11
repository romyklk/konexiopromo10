<style>
    h2 {
        color: red;
        font-size: 24px;
        text-align: center;
    }
</style>
<h2>INTRODUCTION A PHP</h2>

<?php

echo "Hello World !"; // echo est une instruction qui permet d'afficher du texte dans le navigateur.

echo "<h1>Ceci est un titre HTML</h1>"; // On peut mélanger du HTML avec du PHP.

?> <!-- On ferme notre balise PHP -->

<h1>Titre hors code PHP</h1> <!-- On peut écrire du HTML dans la page si on ferme notre balise PHP -->


<?= "Cette balise permet de faire un echo <br>"; ?> <!--Ceci est une forme raccourcie de la balise PHP echo.-->

<b>Bonjour</b>

<?php

echo "<hr><h2>Les commentaires</h2>";

echo "Un commentaire sur une seule ligne se fait avec //"; // Ceci est un commentaire sur une seule ligne.

echo "<br>";

echo "Un commentaire sur plusieurs lignes se fait avec /* */"; 
/* Ceci est un commentaire 
sur plusieurs 
lignes. */

echo "<br>";

echo "Un commentaire sur une seule ligne se fait avec #"; # Ceci est un commentaire sur une seule ligne.

print "print est une autre instruction d'affichage similaire à echo <br>"; // print est une autre instruction d'affichage similaire à echo.

$mot1 = "Bonjour"; 
$mot2 = "tout le monde !";

echo $mot1 , $mot2; 
echo "<br>";
// print($mot1,$mot2); // Erreur car print ne peut pas afficher plusieurs arguments.

echo "<hr><h2>Les variables / Types / Déclaration / Affectation </h2>";

// Une variable est un espace mémoire nommé qui permet de conserver une valeur.
// La déclaration d'une variable se fait avec le signe $.
// Une variable est sensible à la casse.C'est à dire que $maVariable est différent de $mavariable.
// Une variable ne peut pas commencer par un chiffre.
// Une variable ne peut contenir que des caractères alphanumériques (A-Z, a-z, 0-9) ou le caractère souligné (_).
// Une variable ne peut pas contenir d'espace.
// Une variable ne peut pas contenir d'accent.
// Il est recommandé d'utiliser du camelCase pour nommer une variable ou snake_case.Exemple : $maVariable ou $ma_variable.

$a = 127; // Je déclare la variable $a et je lui affecte la valeur 127.

// gettype() est une fonction prédéfinie qui permet de voir le type d'une variable.

echo gettype($a); // Ici on affiche le type de la variable $a qui est integer (entier).

$b ="127"; // Une chaine de caractère.
echo "<br>";
echo gettype($b); // Ici on affiche le type de la variable $b qui est string (chaine de caractère).
$c ="Hello"; // Une chaine de caractère.

echo "<br>";

$d= 1.5; // Un nombre à virgule.
echo gettype($d); // Ici on affiche le type de la variable $d qui est double (nombre à virgule).
echo "<br>";
$e = true; // Un booléen.
echo gettype($e); // Ici on affiche le type de la variable $e qui est boolean (booléen).