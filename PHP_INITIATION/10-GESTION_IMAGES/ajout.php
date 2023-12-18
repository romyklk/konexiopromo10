<?php
// connexion à la bdd

$bdd = new PDO(
    'mysql:host=localhost;dbname=ajout_image',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST['titre']; // on récupère le titre de l'image
    $image = "";

    // $_FILES est une superglobale qui représente les fichiers envoyés via un formulaire. C'est un array multidimensionnel :

    // Si le formulaire contient un fichier qui a pour name "image", alors hje rentre dans la condition
    if (!empty($_FILES['image']['name'])) {

        $image = $_FILES['image']['name']; // on récupère le nom de l'image

        // Je renomme l'image pour éviter les doublons dans le dossier.

        $nom_image = time() . '_' . rand(1, 9999) . '_' . bin2hex(random_bytes(8)) . '_' . $image;

        var_dump($nom_image);

        // je récupère l'extension de l'image

        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        var_dump($ext);

        $ext = strtolower($ext); // je mets l'extension en minuscule

        // je définis un tableau d'extension autorisées pour l'upload
        $tabExtention = [
            'jpg',
            'png',
            'jpeg',
            'gif'
        ];

        // Jé déclare 2 constantes pour définir le chemin de l'image sur le serveur et l'url de l'image

        define('URL', 'http://localhost/KONEXIO10/PHP_INITIATION/10-GESTION_IMAGES/upload/');

        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '/KONEXIO10/PHP_INITIATION/10-GESTION_IMAGES/upload/');

        var_dump(BASE);

        if (in_array($ext, $tabExtention)) {

            // Copy() permet de copier un fichier depuis un emplacement vers un autre. Elle prend 2 arguments : Le nom temporaire du fichier et le chemin de destination.

            // Move_uploaded_file() permet de déplacer un fichier depuis un emplacement vers un autre. Elle prend 2 arguments : Le nom temporaire du fichier et le chemin de destination.

            //copy($_FILES['image']['tmp_name'], BASE . $nom_image); 

            //move_uploaded_file($_FILES['image']['tmp_name'], BASE . $nom_image);

            // je vérifie que le fichier ne dépasse pas 8Mo
            if($_FILES['image']['size'] <= 8000000){
                copy($_FILES['image']['tmp_name'], BASE . $nom_image);

                $nom_bdd = URL . $nom_image;

                $req = $bdd->prepare("INSERT INTO pictures(nom, picture_name) VALUES (:nom, :picture_name)");

                $req->bindValue(':nom', $titre, PDO::PARAM_STR);
                $req->bindValue(':picture_name', $nom_bdd, PDO::PARAM_STR);

                $req->execute();
            }
        } else {
            echo "L'extension n'est pas correcte";
        }
    }
}


?>


<h1>
    Ajout d'une image en php
</h1>
<!-- enctype="multipart/form-data" permet d'uploader des fichiers et du texte en même temps. -->

<form action="" method="POST" enctype="multipart/form-data">

    <input type="text" name="titre" placeholder="Titre de l'image"><br><br>
    <input type="file" name="image"><br><br>
    <input type="submit" value="Envoyer">
</form>