<?php

// Connexion à la base de données

$pdo = new PDO('mysql:host=localhost;dbname=konexion_project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

