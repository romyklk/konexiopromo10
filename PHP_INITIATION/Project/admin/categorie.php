<?php
require_once '../inc/db.php';
require_once "../inc/function.php";
session_start();

if (!userIsAdmin()) {
    header('Location: ../index.php');
    exit;
}

define('CATEGORY_PATH', $_SERVER['DOCUMENT_ROOT'] . '/KONEXIO10/PHP_INITIATION/Project/public/assets/upload/shop/');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars(addslashes($value));
    }

    $categorie = $_POST['categorie'];
    $errors = [];

    // Vérifier si la catégorie est vide
    if (empty($categorie)) {
        $errors[] = "La catégorie est obligatoire <br>";
    }

    // Vérification de la longueur de la catégorie

    if (strlen($categorie) < 2 || strlen($categorie) > 20) {
        $errors[] = "La catégorie doit contenir entre 2 et 20 caractères <br>";
    }

    // Vérifier si la catégorie existe déjà

    $query = "SELECT * FROM categorie WHERE nom_categorie = :categorie";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':categorie', $categorie, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $errors[] = "La catégorie existe déjà <br>";
    }

    // TRAITEMENT DE L'IMAGE

    if (!empty($_FILES['picture'])) {
        // Récupérer le nom de l'image
        $nomImage = $_FILES['picture']['name'];
        //Renommer l'image
        $nomImage = bin2hex(random_bytes(16)) . '_' . $nomImage;
        // Les extensions autorisées
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
        // Récupérer l'extension de l'image
        $ext = strtolower(pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION));
        // Vérifier si l'extension est autorisée
        if (!in_array($ext, $allowedExtensions)) {
            $errors[] = "L'extension $ext n'est pas autorisée <br>";
        }

        // Vérifier si le poids de l'image est autorisé
        if ($_FILES['picture']['size'] > 3000000) {
            $errors[] = "L'image ne doit pas dépasser 3Mo <br>";
        }
    }

    // S'il n'y a pas d'erreurs

    if (empty($errors)) {
        $req2 = "INSERT INTO `categorie`(`nom_categorie`, `image_categorie`) VALUES (:categorie, :image)";

        $stmt2 = $pdo->prepare($req2);
        $stmt2->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $stmt2->bindValue(':image', $nomImage, PDO::PARAM_STR);
        if ($stmt2->execute()) {
            // Déplacer l'image dans le dossier images

            move_uploaded_file($_FILES['picture']['tmp_name'], CATEGORY_PATH . $nomImage);

            header('Location: categorie.php');
        }
    }
}
?>


<?php require_once 'header_admin.php'; ?>

<!-- Contenu du tableau de bord -->
<div class="content">
    <h2 class="text-center">Gestion des Catégories</h2>

    <div class="container">
        <?php 
        if (!empty($errors)) {
            generateErrorMessage($errors);
        }
        ?>
        <!-- Formulaire d'ajout des catégories -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-tags"></i></span>
                <input type="text" class="form-control" name="categorie" placeholder="Nom de la catégorie">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" name="picture">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>