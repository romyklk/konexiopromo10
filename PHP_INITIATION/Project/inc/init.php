<?php

require_once './inc/db.php';

// Chemin image en local

define('IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/KONEXIO10/PHP_INITIATION/Project/public/assets/upload/');


// Déclaration d'un tableau d'erreurs
$errors = [];


// Je lance la session
session_start();