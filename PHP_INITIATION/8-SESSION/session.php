<?php

/* 
Les sessions permettent de stocker des informations côté serveur. Les fichiers de sessions sont sur le serveur, et non sur le poste client contrairement aux cookies. Les sessions sont donc plus sécurisées que les cookies.

Quand vous créez une session, un cookie est automatiquement créé sur le poste client. Ce cookie contient un identifiant unique qui permet de retrouver la session sur le serveur.

Pour créer une session, il faut utiliser la fonction session_start().

Pour stocker des informations dans la session, on utilise la variable superglobale $_SESSION. C'est un tableau associatif. On peut donc stocker des informations de la manière suivante : $_SESSION['cle'] = 'valeur';.

Pour détruire une session, on utilise la fonction session_destroy().

Pour supprimer une information de la session, on utilise la fonction unset($_SESSION['cle']);.

Les données qui sont dans la session sont accessibles sur toutes les pages du site. Il faut donc démarrer la session sur toutes les pages où l'on souhaite utiliser les données de la session.
*/

session_start(); // on démarre la session

$_SESSION['pseudo'] = 'John'; // on écrit dans la session le pseudo de l'utilisateur
$_SESSION['age'] = 24; // on écrit dans la session l'âge de l'utilisateur

var_dump($_SESSION); // on affiche le contenu de la session

//unset($_SESSION['age']); // on supprime l'âge de l'utilisateur de la session

//var_dump($_SESSION); // on affiche le contenu de la session

//session_destroy(); // on détruit la session
