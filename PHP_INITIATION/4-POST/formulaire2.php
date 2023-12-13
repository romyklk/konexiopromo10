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
        width: 300px;
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
</style>

<body>
    <!-- 
/*
Exercice 1 :

Faire un formulaire d'inscription avec les champs suivants :
- civilité(Mr ou Mme)    
- nom(au moins 2 caractères)
- prénom(au moins 2 caractères et au plus 50 caractères)
- email
- mot de passe
- confirmation du mot de passe
- ville
- code postal(5 chiffres)
- button submit

Afficher les données du formulaire dans la page formulaire3.php

Si les données du formulaire sont valides, afficher un message de bienvenue contenant les données du formulaire.

Si les données du formulaire sont invalides, afficher un message d'erreur.

*/
    -->
    <div class="container">
        <form action="" method="POST">
            <div>
                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text"  name="nom" value="<?= $nom ?>">
                </div>
                <div style="margin-top: 20px;">
                    <label for="prenom">Prénom</label>
                    <input type="text"  name="prenom">
                    <?php
                    echo "<p>Le prénom doit contenir au moins 2 caractères et au plus 50 caractères</p>";
                    ?>
                </div>
                <div style="margin-top: 20px;">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div style="margin-top: 20px;">
                    <label for="cp">Code postal</label>
                    <input type="text" id="cp" name="cp">
                </div>
                <div style="margin-top: 20px;">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>
                <div style="margin-top: 20px;">
                    <label for="password2">Confirmation du mot de passe</label>
                    <input type="password" id="password2" name="password2">
                </div>
                <div style="margin-top: 20px;">
                    <input type="submit" value="Envoyer">
                </div>
        </form>
    </div>
</body>

</html>