<?php
//Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=mini_blog', 'root', ''
    ,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ]
);