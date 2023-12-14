<?php
/* 
Les cookies sont des fichiers textes stockés sur le poste client. Ils sont utilisés pour stocker des informations sur le client, comme son nom, son adresse, son mot de passe, etc. Ils sont utilisés pour garder en mémoire des informations sur le client, afin de lui proposer des services personnalisés. 

Les cookies sont envoyés au serveur web à chaque requête HTTP, ce qui permet au serveur de reconnaître le client et de savoir s'il est connecté ou non, et de lui proposer des services personnalisés.

Les cookies sont stockés dans le navigateur du client, et sont donc accessibles par le client. Ils ne doivent donc pas contenir d'informations sensibles, comme le mot de passe du client, ou son numéro de carte bancaire.

Les cookies sont stockés dans la superglobale $_COOKIE, qui est un tableau associatif. Les clés du tableau sont les noms des cookies, et les valeurs sont les valeurs des cookies.

Pour créer un cookie, on utilise la fonction setcookie(), qui prend 3 paramètres : le nom du cookie, sa valeur, et sa durée de vie en secondes. La durée de vie est optionnelle, et si elle n'est pas spécifiée, le cookie sera supprimé à la fin de la session, c'est-à-dire lorsque le navigateur sera fermé.
*/


if (isset($_GET['country'])) {

    $pays = $_GET['country']; // on récupère le pays dans l'URL

}elseif(isset($_COOKIE['country'])){ // sinon si on a un cookie country
    
    $pays = $_COOKIE['country']; // on récupère le pays dans le cookie
}else{
    $pays = '';
}

$dure_de_vie = 365 * 24 * 3600; // 1 an en secondes

// on crée le cookie country qui contient le pays choisi par l'utilisateur
setcookie('country', $pays, time() + $dure_de_vie);


switch ($pays) {
    case 'fr':
        echo '<b>Bonjour et bienvenue sur notre site</b>';
        break;
    case 'es':
        echo '<b>Hola y bienvenido a nuestro sitio</b>';
        break;
    case 'it':
        echo '<b>Ciao e benvenuto sul nostro sito</b>';
        break;
    case 'de':
        echo '<b>Guten Tag und willkommen auf unserer Website</b>';
        break;
    case 'uk':
        echo '<b>Hello and welcome to our website</b>';
        break;
    default:
        echo '<b>Vous n\'avez pas choisi de pays</b>';
        break;
}




?>

<div>
    <a href="?country=fr" style="display: block;">FRANCE</a>

    <a href="?country=es" style="display: block;">ESPAGNE</a>

    <a href="?country=it" style="display: block;">ITALIE</a>

    <a href="?country=de" style="display: block;">ALLEMAGNE</a>

    <a href="?country=uk" style="display: block;">ANGLETERRE</a>
</div>