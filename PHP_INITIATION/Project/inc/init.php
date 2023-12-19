<?php

require_once './inc/db.php';
require_once './inc/function.php';
// Chemin image en local
define('IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/KONEXIO10/PHP_INITIATION/Project/public/assets/upload/');

// Chemin image en ligne

define('IMAGE_URL', 'http://localhost/KONEXIO10/PHP_INITIATION/Project/public/assets/upload/');


// Déclaration d'un tableau d'erreurs
$errors = [];


// Je lance la session
session_start();








