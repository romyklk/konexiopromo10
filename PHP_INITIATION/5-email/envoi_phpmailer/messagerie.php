<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fullName = $_POST['nom'] . ' ' . $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Instantiation de la classe PHPMailer qui va nous permettre d'avoir accès à toutes les méthodes de la classe PHPMailer pour envoyer un email
    $mail = new PHPMailer(true);

    try {

        // $mail->SMTPDebug permet d'afficher les erreurs si il y en a
        // SMTP::DEBUG_SERVER permet d'afficher les erreurs.
        // 0 permet de ne pas afficher les erreurs
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();    // Permet d'utiliser le protocole SMTP
        $mail->Host       = 'smtp.gmail.com'; // Permet de définir le serveur SMTP
        $mail->SMTPAuth   = true;      // Permet d'activer l'authentification SMTP
        $mail->Username   = 'romyklk2210@gmail.com';   // Identifiant pour se connecter au serveur SMTP
        $mail->Password   = 'mlgx ptmg ruwc xzxk';  // Mot de passe d'application pour se connecter au serveur SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  // Sécurisation du serveur SMTP
        $mail->Port       = 465;    // Port TCP à utiliser pour la connexion au serveur SMTP (465 pour SSL, 587 pour TLS)
        //if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('romyklk2210@gmail.com', 'KONEXIO 10');
        $mail->addAddress($email, $fullName);     //Add a recipient
        $mail->addReplyTo($email, $fullName);



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $sujet;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();
        echo 'Votre message a bien été envoyé';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        margin: 0 auto;
        width: 400px;
        padding: 30px;
        border: 1px solid black;
        box-shadow: 5px 5px 5px black;
        border-radius: 10px;
    }

    .container:hover {
        box-shadow: 10px 10px 10px coral;
        transition: 0.5s;
    }


    input {
        width: 100%;
        display: block;
        margin: 10px;
    }

    label {
        display: block;
        margin: 10px;
    }

    input[type="submit"] {
        margin: 10px auto;
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        text-align: center;
    }

    input[type="submit"]:hover {
        background-color: #F56789;
        cursor: pointer;
        transition: 0.5s;
    }

    select {
        display: block;
        margin: 10px;
        width: 100%;
    }

    textarea {
        width: 100%;
        margin: 10px;
    }
</style>

<body>
    <h1 style="text-align: center;">
        Contact Us
    </h1>

    <div class="container">
        <form action="" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div style="margin-top: 20px;">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div style="margin-top: 20px;">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div style="margin-top: 20px;">
                <select name="sujet" id="sujet">
                    <option value="sujet1">Sujet 1</option>
                    <option value="sujet2">Sujet 2</option>
                    <option value="sujet3">Sujet 3</option>
                </select>
            </div>
            <div style="margin-top: 20px;">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>

</html>