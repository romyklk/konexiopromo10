<?php
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = [];
    // Vérifier si les champs sont vides
    if (empty($_POST['nom'])) {
        $errors['nom'] = "Le nom est obligatoire";
    }
    if (empty($_POST['prenom'])) {
        $errors['prenom'] = "Le prenom est obligatoire";
    }
    if (empty($_POST['email'])) {
        $errors['email'] = "L'email est obligatoire";
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "Le mot de passe est obligatoire";
    }

    // Vérification de la longueur des champs
    if (strlen($_POST['nom']) < 3 || strlen($_POST['nom']) > 20) {
        $errors['nom'] = "Le nom doit être compris entre 3 et 20 caractères";
    }
    if (strlen($_POST['prenom']) < 3 || strlen($_POST['prenom']) > 50) {
        $errors['prenom'] = "Le prenom doit être compris entre 3 et 50 caractères";
    }
    if (strlen($_POST['password']) < 4 || strlen($_POST['password']) > 20) {
        $errors['password'] = "Le mot de passe doit être compris entre 4 et 20 caractères";
    }

    // vérification du format de l'email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'email n'est pas valide";
    }

    // Vérification de l'unicité de l'email
    $sql = "SELECT * FROM user WHERE email = :email";
    $request = $bdd->prepare($sql);
    $request->bindValue(':email', $_POST['email']);
    $request->execute();
    if ($request->rowCount() > 0) {
        $errors['email'] = "L'email existe déjà";
    }

    // Si il n'y a pas d'erreurs
    if (empty($errors)) {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO `user`(`nom`, `prenom`, `email`, `password`) VALUES (:nom, :prenom, :email, :password)";
        $req = $bdd->prepare($query);
        $req->bindValue(':nom', $_POST['nom']);
        $req->bindValue(':prenom', $_POST['prenom']);
        $req->bindValue(':email', $_POST['email']);
        $req->bindValue(':password', $hash);
        $req->execute();
        header('Location: connexion.php');
    }
}
?>

<?php require_once 'Common/header.php'; ?>
<h1 class="text-center">
    S'inscrire
</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" value="<?= $_POST['nom'] ?? '' ?>">
                    <div class="text-danger"><?= $errors['nom'] ?? '' ?></div>
                </div>
                <div class="form-group">
                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Entrez votre prenom" value="<?= $_POST['prenom'] ?? '' ?>">
                    <div class="text-danger"><?= $errors['prenom'] ?? '' ?></div>
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email" value="<?= $_POST['email'] ?? '' ?>">
                    <div class="text-danger"><?= $errors['email'] ?? '' ?></div>
                </div>
                <div class="form-group">
                    <label for="password">mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Entrez votre mot de passe" value="<?= $_POST['password'] ?? '' ?>">
                    <div class="text-danger"><?= $errors['password'] ?? '' ?></div>
                </div>
                <button type="submit" class="btn btn-success mt-3">S'inscrire</button>

            </form>
        </div>
    </div>
</div>
<?php require_once 'Common/footer.php'; ?>