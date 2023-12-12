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

echo $mot1, $mot2;
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

$b = "127"; // Une chaine de caractère.
echo "<br>";
echo gettype($b); // Ici on affiche le type de la variable $b qui est string (chaine de caractère).
$c = "Hello"; // Une chaine de caractère.

echo "<br>";

$d = 1.5; // Un nombre à virgule.
echo gettype($d); // Ici on affiche le type de la variable $d qui est double (nombre à virgule).
echo "<br>";
$e = true; // Un booléen.
echo gettype($e); // Ici on affiche le type de la variable $e qui est boolean (booléen).

echo "<hr><h2>Assignation par référence </h2>";
$maVarA = "Bonjour";
$maVarB = &$maVarA; // On affecte à la variable $maVarB la valeur de $maVarA par référence.
echo $maVarB;
echo "<br>";
echo $maVarA;
echo "<br>";
// Si la valeur de $maVarB change, alors la valeur de $maVarA change aussi.
$maVarB = "Au revoir";
echo "<br>";
echo $maVarB;
echo "<br>";
echo $maVarA;
echo "<br>";

/* L'assignation par référence est utile lorsque vous manipulez de grande quantité de données.Cela permet de ne pas copier la valeur d'une variable à une autre mais de faire pointer la variable vers la même valeur en mémoire. Elle est plus performante car évite de faire une copie de la valeur qui peut impacter les performances de votre application. */

echo "<hr><h2>La concaténation</h2>";
// Pour faire de la concaténation en PHP , on utilis  le point (.) pour lier les éléments entre eux.
$x = "Bonjour";
$y = "tout le monde !";

echo $x . $y . "<br>"; // On peut concaténer des variables entre elles.
echo "$x $y <br>"; // On peut concaténer des variables entre elles.
echo '$x $y <br>';
// On peut aussi concaténer avec la virgule (,)
echo $x, " ", $y, "<br>"; // On peut concaténer des variables entre elles.

echo "<hr><h2>Concaténation lors de l'affectation</h2>";

$prenom1 = "Bruno";
$prenom1 = "Claire";
echo $prenom1 . "<br>"; // Affiche Claire car la valeur Bruno a été écrasée par la valeur Claire.
$prenom2 = "Nicolas";
$prenom2 .= " Marie";
echo $prenom2;
// On affecte la valeur Marie à la variable $prenom2 en l'ajoutant à la valeur Nicolas sans l'écraser grâce à l'opérateur .=

echo "<hr><h2>Guillemets et Quotes</h2>";
$message = "Aujourd'hui";
$message2 = 'Aujourd\'hui'; // On échappe les apostrophes dans les quotes simples avec l'anti-slash (\).

$texte = "Bonjour";

echo "$texte tout le monde <br>"; // Dans les guillemets, la variable est évaluée  c'est son contenu qui est affiché.
echo '$texte tout le monde <br>'; // Dans les quotes, la variable n'est pas évaluée 

/* Exercice 1: Écrivez un programme qui utilise quatres variables pour stocker le nom, le prénom, l'age et la ville.Puis affichez la phrase Bonjour je suis nom prénom et j'ai age ans et j'habite à ville en utilisant les variables."; */

$nomExercice = "Doe";
$prenomExercice = "John";
$ageExercice = 35;
$villeExercice = "Paris";
echo "<b>Bonjour je suis $nomExercice $prenomExercice et j'ai $ageExercice ans et j'habite à $villeExercice </b><br>";

echo "<hr><h2>Constante et constante Magique</h2>";
/* 
Une constante est un espace mémoire nommé qui permet de conserver une valeur mais contrairement à une variable, cette valeur ne peut pas être modifiée durant l'exécution du script.
Pour déclarer une constante en PHP procédural, on utilise la fonction define() qui prend deux arguments :Le nom de la constante et sa valeur.
Par convention, une constante se déclare toujours en majuscule.
*/
define("CAPITALE", "Paris"); // Je déclare ma constante CAPITALE et je lui affecte la valeur Paris.
define("TAUX_TVA", 0.2);

echo CAPITALE . "<br>"; // Affiche Paris.

// constante magique: Constante qui change de valeur en fonction du contexte dans lequel elle est utilisée.Elle commence et se termine par deux underscores (__) et sont fournies par le langage.

echo __FILE__ . "<br>"; // Affiche le chemin complet vers le fichier courant.
echo __LINE__ . "<br>"; // Affiche le numéro de la ligne courante.
echo __DIR__ . "<br>"; // Affiche le dossier dans lequel se trouve le fichier courant.
// echo __FUNCTION__ . "<br>"; // Affiche le nom de la fonction dans laquelle on se trouve.
// echo __CLASS__ . "<br>"; // Affiche le nom de la classe dans laquelle on se trouve.
// echo __METHOD__ . "<br>"; // Affiche le nom de la méthode dans laquelle on se trouve.


/* // Exercice :Écrivez un programme qui utilise trois constante pour stocker les couleurs "Bleu", "Blanc" et "Rouge". Le programme doit ensuite afficher la phrase "Bleu-Blanc-Rouge" en utilisant ces trois constantes et en insérant des tirets ("-") entre chaque couleur */

echo "<b style='color:blue;'> Correction de l'exercice </b><br>";

define("COLOR_1", "Bleu");
define("COLOR_2", "Blanc");
define("COLOR_3", "Rouge");

echo COLOR_1 . "-" . COLOR_2 . "-" . COLOR_3 . "<br>";

echo "<hr><h2>Opérateurs arithmétiques</h2>";
// Les opérateurs arithmétiques permettent d'effectuer des opérations de calculs sur des valeurs numériques (integer ou double).
// Addition +
// Soustraction -
// Multiplication *
// Division /
// Modulo %
// Exponentiation **
$a = 10;
$b = 2;

echo $a + $b . "<br>"; // Affiche 12
echo $a - $b . "<br>"; // Affiche 8
echo $a * $b . "<br>"; // Affiche 20
echo $a / $b . "<br>"; // Affiche 5
echo $a % $b . "<br>"; // Affiche 0
echo $a ** $b . "<br>"; // Affiche 100

echo "<b>Opération avec Affection </b><br>";

$c = 10;
$d = 2;

$c += $d; // $c = $c + $d
echo $c . "<br>"; // Affiche 12
$c -= $d; // $c = $c - $d
echo $c . "<br>"; // Affiche 10
$c *= $d; // $c = $c * $d
echo $c . "<br>"; // Affiche 20

echo "<hr><h2>Structures conditionnelles (if / else) - Opérateurs de comparaison</h2>";
// empty() permet de vérifier si une variable est vide.
// isset() permet de vérifier si une variable existe et a une valeur non NULL.

/* 
Les valeurs suivantes sont considérées comme vides :
- une chaîne de caractères vide "" ou ''.
- un nombre égal à 0 (0, 0.0, "0").
- un booléen égal à false (false).
- NULL.
*/

$variable = 37;
if (isset($variable)) { // Si la $variable existe et a une valeur non NULL.
    echo "La variable existe et n'est pas NULL <br>";
} else {
    echo "La variable n'existe pas ou est NULL <br>";
}

$ma_variable = ""; // Chaîne de caractère vide.

if (empty($ma_variable)) { // Si la $ma_variable est vide.
    echo "La variable est vide <br>";
} else {
    echo "La variable n'est pas vide <br>";
}

// Opérateurs de comparaison

$nb1 = 10;
$nb2 = 5;
$nb3 = 2;

// comparaison
if ($nb1 > $nb2) { // Si $nb1 est supérieur à $nb2.
    echo "$nb1 est supérieur à $nb2 <br>";
} else {
    echo "$nb1 n'est pas supérieur à $nb2 <br>";
}

// &&
if ($nb1 > $nb2 && $nb2 > $nb3) {  // Si $nb1 est supérieur à $nb2 ET que $nb2 est supérieur à $nb3.
    echo "$nb1 est supérieur à $nb2 qui est supérieur à $nb3 <br>";
} else {
    echo "Au moins une des conditions n'est pas remplie <br>";
}

// ||  ==
if ($nb1 == 9 || $nb2 > $nb3) {  // Si $nb1 est égal à 9 OU que $nb2 est supérieur à $nb3.
    echo "$nb1 est égal à 9 OU $nb2 est supérieur à $nb3 <br>";
} else {
    echo "Au moins une des conditions n'est pas remplie <br>";
}

if ($nb1 == 8) {
    echo "$nb1 est égal à 8 <br>";
} elseif ($nb1 != 10) {
    echo "$nb1 est différent de 10 <br>";
} else {
    echo "Les deux conditions précédentes ne sont pas remplies <br>";
}


// XOR (OU exclusif): Il faut que l'une des deux conditions soit remplie mais pas les deux en même temps.
if ($nb1 == 10 xor $nb2 == 6) {
    echo "Une des deux conditions est remplie mais pas les deux en même temps <br>";
} else {
    echo "Les deux conditions sont remplies ou aucune des deux n'est remplie <br>";
}

// Ecriture ternaire

$age_utilisateur = 19;

echo ($age_utilisateur >= 18) ? "Vous êtes majeur" : "Vous êtes mineur";

//? remplace le if et : remplace le else.

//!\\PHP 7

$maVariable = isset($autreVariable) ? $autreVariable : "valeur par défaut";

echo $maVariable;

// L'opérateur Null coalescent ( ?? ) permet de vérifier si une variable existe et a une valeur non NULL. Si c'est le cas, elle renvoie sa valeur. Sinon, elle renvoie une valeur par défaut.

$maVariable2 = $autreVariable ?? "valeur par défaut"; // Equivalent à la ligne précédente. ?? remplace le isset().
/* 
Récapitulatif des opérateurs de comparaison :
= affectation
== comparaison de la valeur
=== comparaison de la valeur et du type
*/

echo "<hr><h2>Condition Switch</h2>";
// switch est une instruction qui permet d'effectuer des actions différentes en fonction de la valeur d'une variable.
// case représente les différentes valeurs que peut prendre la variable.
// break permet de sortir du switch.
$couleur = "yellow";

switch ($couleur) {
    case 'red':
        echo "Vous aimez le rouge";
        break;
    case 'blue':
        echo "Vous aimez le bleu";
        break;
    case 'green':
        echo "Vous aimez le vert";
        break;
    default:
        echo "Vous n'aimez ni le rouge, ni le bleu, ni le vert";
        break;
}

//!\\ PHP 8
echo "<hr><h2>Expression match</h2>";
// Match est une nouvelle instruction disponible depuis PHP 8 qui permet de faire des comparaisons comme le switch.Elle est plus claie et plus concise que le switch.


$color = "red";

$affichage = match ($color) {
    "red" => "Vous aimez le rouge",
    "blue" => "Vous aimez le bleu",
    "green" => "Vous aimez le vert",
    default => "Vous n'aimez ni le rouge, ni le bleu, ni le vert"
};

echo $affichage;

echo "<hr><h2>Les fonctions prédéfinies</h2>";

// Une fonction prédéfinie permet de réaliser un traitement spécifique et retourne un résultat.

// Date() : Retourne la date du jour au format souhaité.
echo date("d/m/Y") . "<br>"; // Affiche la date du jour au format jour/mois/année.

// strpos() : Retourne la position d'un caractère dans une chaîne de caractère.Si la chaîne de caractère n'est pas trouvée, elle retourne false.

$phrase = "johndoe@mail.com";
echo strpos($phrase, "@") . "<br>"; // Affiche 7 car le caractère @ se trouve à la 7ème position dans la chaîne de caractère à partir de 0.

// strlen() : Retourne la taille d'une chaîne de caractère.
$txt = "café au lait";

echo strlen($txt) . "<br>"; // Affiche 661 car la chaîne de caractère contient 632 caractères.

// iconv_strlen() : Retourne la taille d'une chaîne de caractère en prenant en compte les caractères spéciaux(UTF-8 multioctets).

echo iconv_strlen($txt) . "<br>"; // Affiche 632 car la chaîne de caractère contient 632 caractères.

$txt2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nesciunt velit qui quia vel nobis molestias, porro repellat fugit, maxime quas sequi ab corrupti? Vero sapiente iure hic! Saepe, delectus.
Non quas corporis qui ab suscipit magni, adipisci quia cupiditate veritatis minus officia porro ullam perferendis facilis molestiae? Ratione blanditiis a corrupti est voluptatum perferendis neque doloribus alias aliquam deleniti.
Non nisi pariatur soluta, minus, facilis neque odit at nihil temporibus officia eius eaque natus debitis facere reiciendis ipsam quas quidem laboriosam quo explicabo, amet asperiores aliquid! Magnam, inventore! Voluptatum.';

// substr() : Retourne une partie d'une chaîne de caractère.Elle prend 3 arguments : La chaîne de caractère, la position de départ et la longueur souhaitée.

echo substr($txt2, 0, 98) . "...<a href='#'>Lire la suite</a>"; // Affiche les 100 premiers caractères de la chaîne de caractère.

//!\\ PHP 8
echo "<br>";
// str_contains() : Retourne true si une chaîne de caractère est contenue dans une autre.Elle est sensible à la casse.
// str_starts_with() : Retourne true si une chaîne de caractère commence par une autre.Elle est sensible à la casse.
// str_ends_with() : Retourne true si une chaîne de caractère se termine par une autre.Elle est sensible à la casse.

// var_dump() est une instruction qui permet d'afficher le contenu et le type d'une variable.Elle est très utile pour le débuggage.

var_dump(str_contains($txt2, "Lorem")); // Retourne true.
echo "<br>";
var_dump(str_starts_with($txt2, "Lorem")); // Retourne true.
echo "<br>";
var_dump(str_ends_with($txt2, "Lorem")); // Retourne false.

echo "<hr><h2>Les fonctions utilisateur</h2>";

// Ce sont des fonctions que l'on va créer nous même et qui vont nous permettre de réaliser des traitements spécifiques.

// Déclaration d'une fonction

function maFonction()
{
    // Code à exécuter
    echo "<hr>";
}

// Appel d'une fonction
maFonction();

function sayHello()
{
    echo "Hello !";
}

sayHello();

echo "<hr><h2>Les paramètres de fonctions</h2>";
// Fonction avec paramètre

function direBonjour($prenom)
{
    return "Bonjour $prenom !";
}

echo direBonjour("John"); // On appelle la fonction en lui passant un argument.
$user1 = "Bruno";
echo "<br>";
echo direBonjour($user1); // On appelle la fonction en lui passant une variable.

echo "<hr><h2>Les fonctions avec arguments par défaut</h2>";
// Ici je déclare une fonction avec un argument par défaut.Cela signifie que si je n'envoie pas d'argument à ma fonction, elle prendra la valeur par défaut.
function presentation($age, $nom = 'User incognito')
{
    echo "Bonjour je m'appelle $nom et j'ai $age ans";
}

presentation(35, "John");
echo "<br>";
presentation(22);

echo "<hr><h2>Les fonctions avec valeur de retour</h2>";

// Certaines fonctions retournent une valeur après avoir effectué un traitement.Cette valeur peut être exploitée par la suite.

function appliqueTva($montant)
{
    return $montant * 1.2;
}
echo appliqueTva(100);

// Exercice 3 : Faire une fonction qui prend en paramètre un montant et applique le tau de TVA et retourne le montant TTC.Si le taux n'est pas précisé, il doit être de 20% par défaut.(Vous avez les taux suivants : 5.5%, 10%, 20% et 2.1%).

echo "<br>";
function calculerTTC($montant, $taux = 1.2)
{

    return $montant * $taux;
}

echo calculerTTC(100, 1.1);
echo "<br>";
echo calculerTTC(100);
echo "<br>";
echo calculerTTC(100, 1.02);


// On peut appeler une fonction avant sa déclaration car PHP charge toutes les fonctions avant d'exécuter le code.
leTemp();

function leTemp()
{
    echo "Il fait beau";
}
maFonction();
/* EXERCICE 4 : Faire une fonction qui prend la saison et la température et affiche 
"Nous sommes en $saison et il fait $temperature degrés"
Si la température est égale à 1 ou -1 degré, on affiche degré au singulier
Si la saison est printemps , on affiche "au" devant le nom de la saison
Exemple : Nous sommes en hiver et il fait -1 degré
Si la température est supérieur à 18, on affiche " Et il fait chaud" */

// Methode 1
function saison($saison, $temp)
{
    echo ($saison === 'printemps') ? "Nous sommes au $saison " : "Nous sommes en $saison";

    echo ($temp === 1 || $temp === -1) ? " et il fait $temp degré" : " et il fait $temp degrés.";

    echo ($temp > 18) ? " Il fait chaud!" : "";
}


saison('printemps', 22);
echo "<br>";
saison('été', 17);

maFonction();
// Methode 2

function afficherTemperature($saison, $temperature)
{
    $message = "Nous sommes ";

    if ($saison === 'printemps') {
        $message .= "au ";
    } else {
        $message .= "en ";
    }

    $message .= "$saison et il fait ";

    if ($temperature == 1 || $temperature == -1) {
        $message .= abs($temperature) . " degré";
    } else {
        $message .= abs($temperature) . " degrés";
    }

    if ($temperature > 18) {
        $message .= " Et il fait chaud";
    }

    echo $message;
}

afficherTemperature('hiver', -1);
echo "<br>";
afficherTemperature('printemps', 20);

echo "<hr><h2>La portée des variables</h2>";

// Les variables déclarées dans une fonction sont locales à cette fonction.Elles ne peuvent pas être utilisées en dehors de la fonction.

function jourSemaine()
{
    $jour = "Jeudi"; // Variable locale à la fonction jourSemaine.
    return $jour;
    //echo "test"; // Cette ligne ne sera jamais exécutée car après un return.
}

//echo $jour; // Erreur car la variable $jour n'existe pas en dehors de la fonction.

$day = jourSemaine(); // On stocke la valeur retournée par la fonction dans une variable.
echo $day; // Affiche Jeudi.

$country = "France"; // Variable globale.

function showCountry()
{
    global $country; // On rend la variable $country accessible à l'intérieur de la fonction en la déclarant en global.
    echo $country;
}

showCountry(); // Affiche France.

echo "<hr><h2>Typage des arguments et valeur de retour</h2>";
//!\\ PHP 7 : A partir de PHP 7, on peut typer les arguments et la valeur de retour d'une fonction.

// declare(strict_types=1); Est une directive qui permet de typer les arguments et la valeur de retour d'une fonction.Elle doit être placée au début du fichier juste après la balise <?php.

function showUser(string $nom, int $age)
{
    return "Bonjour $nom, vous avez $age ans <br>";
}

echo showUser("John", 35);
echo showUser("John", "35");

// Typage de la valeur de retour

function isMajeur(int $age): bool
{
    return $age >= 18;
}
var_dump(isMajeur(5)); // Retourne bool(true).

echo "<br>";
// Fonction fléchée


$addition = fn ($a, $b) => $a + $b; // On stocke la fonction dans une variable.

echo $addition(1, 2); // Affiche 3.
echo "<br>";

$showData = fn ($data) => "Bonjour $data !<br>";

echo $showData("John");

//!\\PHP 8 : A partir de PHP 8, l'argument peut-être d'un type primitif ou d'un autre type.

function concatene(string|int $a, string|int $b): string|int
{
    return $a . $b;
}

echo concatene("Bonjour ", "tout le monde");
echo "<br>";
echo concatene(1, 2);

echo "<hr><h2>Les structures itératives (boucles)</h2>";

echo "<h3 style='color:blue'>La boucle while</h3>";

// La boucle while permet d'exécuter un bloc de code tant qu'une condition est évaluée à true.

$a = 0; // Valeur de départ de la boucle.
while ($a <= 3) // La condition(tant que $a est <= 3)
{
    echo $a . "--"; // On affiche la valeur de $a.
    $a++; // On incrémente $a de 1 à chaque tour de boucle.
}
echo "<br>";
$a = 0;
while ($a <= 3) // La condition(tant que $a est <= 3)
{
    if ($a == 3)
        echo $a;
    else
        echo $a . "--"; // On affiche la valeur de $a.

    $a++; // On incrémente $a de 1 à chaque tour de boucle.
}

// Exercice 5: En utilisant une boucle while,écrivez un programme qui calcul la somme des entiers compris entre 1 et 100 et affiche le résultat.

echo "<br>";

// Correction
$a = 1; // Valeur de départ de la boucle.
$b = 0; // Somme des entiers compris entre 1 et 100.
while ($a <= 100) {
    $b += $a;
    $a++; //increment de 1
}
echo $b; // Affiche 5050.

echo "<br>";
echo "<h3 style='color:blue'>La boucle for</h3>";

// La boucle for permet d'exécuter un bloc de code un nombre de fois défini à l'avance.
// for (initialisation; condition; sens(incrémentation ou décrémentation))

for ($i = 0; $i <= 10; $i++) {
    echo $i . "==>";
}
echo "<br>";

echo '<select>';
for ($j = 1; $j <= 31; $j++) {
    echo "<option>$j</option>";
}
echo '</select>';

// EXERCICE 6 : En utilisant une boucle for,écrivez un programme qui affiche dans une liste déroulante les années , en partant de l'année en cours et en allant jusqu'à 50 ans en arrière.Faites en sorte que votre code soit pérenne quelque soit l'année en cours.

echo "<br>";


// Correction
echo '<select>';
for ($d = date('Y'); $d >= date('Y') - 50; $d--) {
    echo "<option>$d</option>";
}
echo '</select>';
?>
<select>
    <?php
    for ($d = 0; $d <= 50; $d++) {
        $currentYear = date('Y');
        $currentYear -= $d;
        echo "<option>$currentYear</option>";
    }
    ?>
</select>

<?php

echo "<br>";
echo "<hr><h2>Melande de PHP et HTML</h2>";