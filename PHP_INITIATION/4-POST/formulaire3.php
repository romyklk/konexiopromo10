<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $cp = $_POST['cp'];

    $erreur = [];


    if(isset($nom) && strlen($nom) < 2) {
        $erreur[] = 'Le nom doit contenir au moins 2 caractères <br>';
    }

    if(isset($prenom) && strlen($prenom) < 2 || strlen($prenom) > 50) {
        $erreur[] = 'Le prénom doit contenir au moins 2 caractères et au plus 50 caractères <br>';
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur[] = 'L\'email n\'est pas valide <br>';
    }

    if(isset($password) && $password!= $password2) {
        $erreur[] = 'Les mots de passe ne sont pas identiques <br>';
    }

    if(isset($cp) && iconv_strlen($cp) != 5) {
        $erreur[] = 'Le code postal doit contenir 5 chiffres <br>';
    }
    

    if(!empty($erreur)){
        foreach($erreur as $err) {
            echo $err;
        }
    }else{
        echo "<h1>Bienvenue $prenom $nom</h1>";
        echo "<p>Votre email est $email</p>";
        echo "<p>Votre mot de passe est $password</p>";
        echo "<p>Votre code postal est $cp</p>";
    }
}