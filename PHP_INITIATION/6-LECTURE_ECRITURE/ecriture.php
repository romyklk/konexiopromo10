<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    // fopen() permet d'ouvrir un fichier. Le premier paramètre est le nom du fichier, le deuxième paramètre est le mode d'ouverture du fichier. 'a' permet d'ouvrir le fichier en écriture seule. Si le fichier n'existe pas, il sera créé et si le fichier existe, le pointeur sera placé à la fin du fichier.
    $fichier = fopen('users.txt', 'a');

    // fwrite() permet d'écrire dans un fichier. Le premier paramètre est le fichier dans lequel on veut écrire, le deuxième paramètre est la chaîne de caractères que l'on veut écrire dans le fichier.
    fwrite($fichier, $nom . ' ' . $prenom . "\n");

    // fclose() permet de fermer un fichier. Elle prend en paramètre le fichier que l'on veut fermer.

    // fclose() est optionnelle mais c'est une bonne pratique de fermer un fichier après l'avoir ouvert afin de libérer la mémoire.
    fclose($fichier);
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
                <input type="text" id="nom" name="nom" required>
            </div>
            <div style="margin-top: 20px;">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>

</html>