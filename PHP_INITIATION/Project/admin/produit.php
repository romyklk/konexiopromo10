<?php
require_once '../inc/db.php';
require_once "../inc/function.php";
session_start();

if (!userIsAdmin()) {
    header('Location: ../index.php');
    exit;
}

define('PRODUCT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/KONEXIO10/PHP_INITIATION/Project/public/assets/upload/shop/');

// Traitement du formulaire d'ajout de produit

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Sécurisation des données du formulaire
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars(addslashes($value));
    }
    $reference = $_POST['reference'];
    $categorie = $_POST['categorie'];
    $titre = $_POST['titre'];
    $couleur = $_POST['couleur'];
    $taille = $_POST['taille'];
    $public = $_POST['public'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    $photo = $_FILES['photo']['name'];

    // Vérification des champs obligatoires
    $errors = [];

    if (empty($reference) || empty($categorie) || empty($titre) || empty($couleur) || empty($taille) || empty($public) || empty($prix) || empty($stock) || empty($description) || empty($photo)) {
        $errors[] = "Tous les champs sont obligatoires <br>";
    }

    // Vérification de la référence
    if (!preg_match('#^[A-Z0-9]{3,20}$#', $reference)) {
        $errors[] = "La référence doit contenir au moins 3 caractères (chiffres ou lettres majuscules) <br>";
    }
    $query = $pdo->prepare('SELECT * FROM produit WHERE reference = :reference');
    $query->bindValue(':reference', $reference, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        $errors[] = "La référence existe déjà <br>";
    }

    // Vérification de la catégorie
    if (strlen($categorie) < 3 || strlen($categorie) > 20) {
        $errors[] = "La catégorie doit contenir entre 3 et 20 caractères <br>";
    }

    // Vérification du titre
    if (strlen($titre) < 3 || strlen($titre) > 100) {
        $errors[] = "Le titre doit contenir entre 3 et 100 caractères <br>";
    }

    // Vérification de la couleur
    if (strlen($couleur) < 2 || strlen($couleur) > 20) {
        $errors[] = "La couleur doit contenir entre 3 et 20 caractères <br>";
    }

    // Vérification de la taille
    if ($taille != "xs" && $taille != "s" && $taille != "m" && $taille != "l" && $taille != "xl" && $taille != "xxl") {
        $errors[] = "La taille n'est pas valide <br>";
    }

    // Vérification du public
    if ($public != "homme" && $public != "femme" && $public != "unisexe" && $public != "enfant") {
        $errors[] = "Le public n'est pas valide <br>";
    }

    // Vérification du prix
    if (!preg_match('#^[0-9]{1,5}(\.[0-9]{1,2})?$#', $prix)) {
        $errors[] = "Le prix n'est pas valide <br>";
    }

    // Vérification du stock
    if (!preg_match('#^[0-9]{1,5}$#', $stock)) {
        $errors[] = "Le stock n'est pas valide <br>";
    }

    // Vérification de la description
    if (strlen($description) < 10) {
        $errors[] = "La description doit contenir au moins 10 caractères <br>";
    }

    // Vérification de la photo
    if (empty($_FILES['photo']['name'])) {
        $errors[] = "La photo est obligatoire <br>";
    }

    // Traitement de la photo
    if (!$_FILES['photo']['name']) {
        $extension = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
        if (!in_array($extension, $allowedExtensions)) {
            $errors[] = "Le type de fichier n'est pas valide <br>";
        }
    }

    // INSERTION DU PRODUIT DANS LA BDD

    if (empty($errors)) {

        $photoName = time() . '_' . bin2hex(random_bytes(16)) . '_' . $photo;

        $req = "INSERT INTO `produit`(`reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock)";

        $stmt = $pdo->prepare($req);
        $stmt->bindValue(':reference', $reference, PDO::PARAM_STR);
        $stmt->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':couleur', $couleur, PDO::PARAM_STR);
        $stmt->bindValue(':taille', $taille, PDO::PARAM_STR);
        $stmt->bindValue(':public', $public, PDO::PARAM_STR);
        $stmt->bindValue(':photo', $photoName, PDO::PARAM_STR);
        $stmt->bindValue(':prix', $prix, PDO::PARAM_INT);
        $stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
        if($stmt->execute()) {
            move_uploaded_file($_FILES['photo']['tmp_name'], PRODUCT_PATH . $photoName);
            header('Location: produit.php');
        } else {
            $errors[] = "Erreur lors de l'ajout du produit";
        }
    }

}



?>











<?php require_once 'header_admin.php'; ?>
<!-- Contenu du tableau de bord -->
<div class="content">
    <h2 class="text-center">Gestion des produits</h2>

    <div class="container">
        <!-- Formulaire d'ajout de produits -->
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-upc-scan"></i></span>
                <input type="text" class="form-control" name="reference" placeholder="Référence du produit" value="<?= $reference ?? '' ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-tags"></i></span>
                <input type="text" class="form-control" name="categorie" placeholder="Catégorie du produit" value="<?= $categorie ?? '' ?>">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-file-earmark-text"></i></span>
                <input type="text" class="form-control" name="titre" placeholder="Titre du produit" value="<?= $titre ?? '' ?>">
            </div>

            <div class="d-flex justify-content-between">
                <div class="input-group mb-3 mr-2">
                    <label for="couleur" class="input-group-text">Couleur</label>
                    <select class="form-control" name="couleur">
                        <option <?php if (isset($couleur) && $couleur == "rouge") echo "selected"; ?> value="rouge">Rouge</option>
                        <option <?php if (isset($couleur) && $couleur == "bleu") echo "selected"; ?> value="bleu">Bleu</option>
                        <option <?php if (isset($couleur) && $couleur == "vert") echo "selected"; ?> value="vert">Vert</option>
                        <option <?php if (isset($couleur) && $couleur == "jaune") echo "selected"; ?> value="jaune">Jaune</option>
                        <option <?php if (isset($couleur) && $couleur == "orange") echo "selected"; ?> value="orange">Orange</option>
                        <option <?php if (isset($couleur) && $couleur == "violet") echo "selected"; ?> value="violet">Violet</option>
                        <option <?php if (isset($couleur) && $couleur == "rose") echo "selected"; ?> value="rose">Rose</option>
                        <option <?php if (isset($couleur) && $couleur == "noir") echo "selected"; ?> value="noir">Noir</option>
                        <option <?php if (isset($couleur) && $couleur == "blanc") echo "selected"; ?> value="blanc">Blanc</option>
                        <option  <?php if (isset($couleur) && $couleur == "gris") echo "selected"; ?> value="gris">Gris</option>
                    </select>
                </div>

                <div class="input-group mb-3 mr-2">
                    <label for="taille" class="input-group-text">Taille</label>
                    <select class="form-control" name="taille">
                        <option <?php if (isset($taille) && $taille == "xs") echo "selected"; ?> value="xs">XS</option>
                        <option <?php if (isset($taille) && $taille == "s") echo "selected"; ?> value="s">S</option>
                        <option <?php if (isset($taille) && $taille == "m") echo "selected"; ?> value="m">M</option>
                        <option <?php if (isset($taille) && $taille == "l") echo "selected"; ?> value="l">L</option>
                        <option <?php if (isset($taille) && $taille == "xl") echo "selected"; ?> value="xl">XL</option>
                        <option <?php if (isset($taille) && $taille == "xxl") echo "selected"; ?> value="xxl">XXL</option>
                    </select>
                </div>

                <div class="input-group mb-3 ">
                    <label for="public" class="input-group-text">Public</label>
                    <select class="form-control" name="public">
                        <option <?php if (isset($public) && $public == "homme") echo "selected"; ?> value="homme">Homme</option>
                        <option <?php if (isset($public) && $public == "femme") echo "selected"; ?> value="femme">Femme</option>
                        <option <?php if (isset($public) && $public == "unisexe") echo "selected"; ?> value="unisexe">Unisexe</option>
                        <option <?php if (isset($public) && $public == "enfant") echo "selected"; ?> value="enfant">Enfant</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="input-group mb-3 mr-2">
                    <span class="input-group-text"><i class="bi bi-currency-euro"></i></span>
                    <input type="number" class="form-control" name="prix" placeholder="Prix du produit" value="<?= $prix ?? '' ?>">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-archive"></i></span>
                    <input type="number" class="form-control" name="stock" placeholder="Stock du produit" value="<?= $stock ?? '' ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-file-earmark-text"></i></span>
                <textarea class="form-control" name="description" rows="3" placeholder="Description du produit"><?= $description ?? '' ?></textarea>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>







        
        <!-- Tableau des produits -->
        <h2 class="text-center mt-5">Liste des produits</h2>
        <table class="table table-responsive table-striped table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Référence</th>
                    <th>Catégorie</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>REF123</td>
                    <td>Vêtements</td>
                    <td>Chemise</td>
                    <td>25.99€</td>
                    <td>Chemise élégante pour hommes</td>
                    <td><img src="https://cdn.pixabay.com/photo/2023/06/30/07/49/ai-generated-8097822_1280.jpg" alt="Chemise" width="100" class="img-fluid"></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash3"></i>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td>REF456</td>
                    <td>Vêtements</td>
                    <td>Pantalon</td>
                    <td>35.99€</td>
                    <td>Pantalon élégant pour hommes</td>
                    <td><img src="https://previews.123rf.com/images/kvladimirv/kvladimirv1809/kvladimirv180900129/108268690-jean-bleu-classique-pour-homme-et-jupe-en-denim-violet-sur-fond-bleu-la-vue-du-haut-v%C3%AAtements-pour.jpg" alt="Pantalon" width="100" class="img-fluid"></td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash3"></i>
                        </a>
                    </td>
            </tbody>
        </table>

    </div>
</div>
<!-- Fin du contenu du tableau de bord -->

<?php require_once 'footer_admin.php'; ?>