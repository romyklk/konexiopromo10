<?php

/* 
$_POST est une variable superglobale qui permet de récupérer les données d'un formulaire.

$_POST est un tableau associatif qui contient les données du formulaire.

Les données sont accessibles via les attributs name des champs du formulaire.
Afin de récupérer les données du formulaire que :
- la méthode du formulaire soit POST
- les attributs name des champs du formulaire soient renseignés
- le bouton submit soit cliqué


*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    echo "Bonjour $prenom $nom <br>";
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
        width: 200px;
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
</style>

<body>
    <h1 style="text-align: center;">
        Formulaire
    </h1>

    <div class="container">
        <form action="" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
            </div> 
            <div style="margin-top: 20px;">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>

</html>