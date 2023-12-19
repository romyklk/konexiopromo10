<?php

require_once './inc/init.php';

// Redirection si l'utilisateur est déjà connecté

if (userConnected()) {
    header('Location: profil.php');
    exit();
}

//TRAITEMENT DU FORMUALIRE

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Constant d'erreurs

    define('ERROR_NOM', 'Le nom doit contenir entre 2 et 20 caractères');
    define('ERROR_EMAIL', 'L\'email n\'est pas valide');
    define('ERROR_PSEUDO', 'Le pseudo n\'est pas valide ou indisponible');
    define('ERROR_PASSWORD', 'Le mot de passe doit contenir entre 8 et 20 caractères');
    define('ERROR_CONFIRM_PASSWORD', 'Les mots de passe ne sont pas identiques');
    define('ERROR_CODE_POSTAL', 'Le code postal doit contenir 5 chiffres');
    define('ERROR_PRENOM', 'Le prénom doit contenir entre 2 et 20 caractères');
    define('ERROR_ADRESSE', 'L\'adresse doit contenir entre 2 et 50 caractères');
    define('ERROR_VILLE', 'La ville doit contenir entre 2 et 20 caractères');

    // Sécurisation des données du formulaire
    // htmlspecialchars() convertit les caractères spéciaux en entités HTML
    // addslashes() ajoute des antislashs devant les apostrophes, guillemets doubles, antislashs et NUL
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars(addslashes($value));
    }

    // Déclarartion des variables pour récupérer les données du formulaire
    $gender = $_POST['gender'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $country = $_POST['country'];


    // Vérifier si tous les champs sont remplis

    if (empty($gender) || empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($address) || empty($zipcode) || empty($city) || empty($country)) {
        $errors[] = "Tous les champs sont obligatoires <br>";
    }

    // Vérifier si le nom d'utilisateur contient au moins 3 caractères
    if (strlen($username) < 2 || strlen($username) > 20) {
        $errors[] = "Le nom d'utilisateur doit contenir entre 2 et 20 caractères <br>";
        $error_username = ERROR_PSEUDO;
    }

    // Vérifier si le nom contient au moins 3 caractères
    if (strlen($lastname) < 2 || strlen($lastname) > 20) {
        $errors[] = "Le nom doit contenir entre 2 et 20 caractères <br>";
        $error_lastname = ERROR_NOM;
    }

    // Vérifier si le prénom contient au moins 3 caractères
    if (strlen($firstname) < 2 || strlen($firstname) > 20) {
        $errors[] = "Le prénom doit contenir entre 2 et 20 caractères <br>";
        $error_firstname = ERROR_PRENOM;
    }

    // Vérifier le format de l'email
    // filter_var() permet de filtrer une variable avec un filtre spécifique
    // FILTER_VALIDATE_EMAIL permet de valider un email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide <br>";
        $error_email = ERROR_EMAIL;
    }

    // Regex pour vérifier le pseudo

    $pattern = '#^[a-zA-Z0-9.*-]+$#';

    // preg_match() permet de vérifier si une chaîne de caractères correspond à une expression regulière
    if (!preg_match($pattern, $username)) {
        $errors[] = "Le nom d'utilisateur n'est pas valide <br>";
        $error_pseudo = ERROR_PSEUDO;
    }

    // Vérifier si l'email existe déjà dans la base de données

    $sql = "SELECT email FROM membre WHERE email = :email";
    $req = $pdo->prepare($sql);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->execute();
    // rowCount() permet de compter le nombre de lignes retournées par la requête
    if ($req->rowCount() > 0) {
        $errors[] = "L'email existe déjà <br>";
        $error_username = ERROR_PSEUDO;
    }

    // Vérifier si le pseudo existe déjà dans la base de données

    $sql2 = "SELECT pseudo FROM membre WHERE pseudo = :pseudo";
    $req2 = $pdo->prepare($sql2);
    $req2->bindValue(':pseudo', $username, PDO::PARAM_STR);
    $req2->execute();

    if ($req2->rowCount() > 0) {
        $errors[] = "Le pseudo existe déjà <br>";
    }

    // Vérifier si les 2 mots de passe sont identiques

    if ($password != $confirmPassword) {
        $errors[] = "Les mots de passe ne sont pas identiques <br>";
        $error_password = ERROR_CONFIRM_PASSWORD;
    } else {
        // password_hash() permet de hacher un mot de passe
        // PASSWORD_DEFAULT permet d'utiliser l'algorithme de hachage bcrypt
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    // Vérifiaction de la longueur du code postal

    if (strlen($zipcode) != 5) {
        $errors[] = "Le code postal doit contenir 5 chiffres <br>";
        $error_zipcode = ERROR_CODE_POSTAL;
    }

    // Vérifier si la ville contient au moins 3 caractères
    if (strlen($city) < 2 || strlen($city) > 20) {
        $errors[] = "La ville doit contenir entre 2 et 20 caractères <br>";
        $error_city = ERROR_VILLE;
    }

    // Vérifier si l'adresse contient au moins 3 caractères
    if (strlen($address) < 2 || strlen($address) > 50) {
        $errors[] = "L'adresse doit contenir entre 2 et 50 caractères <br>";
        $error_address = ERROR_ADRESSE;
    }
    // Traitement de l'image de profil
    if (!empty($_FILES['profile-picture']['name'])) {
        // Récupérer le nom de l'image
        $imgName = $_FILES['profile-picture']['name'];
        // Renommer l'image
        $imgNewName = time() . '_' . $imgName;

        // Vérifier si le fichier est une image
        $tabExtension = ['jpg', 'jpeg', 'png', 'gif'];

        $fileExtension = strtolower(pathinfo($imgNewName, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $tabExtension)) {
            $errors[] = "Le fichier n'est pas une image <br>";
        }

        // Vérifier si le fichier n'est pas trop lourd
        if ($_FILES['profile-picture']['size'] > 8000000) {
            $errors[] = "Le fichier est trop lourd <br>";
        }
    }

    if (empty($errors)) {
        copy($_FILES['profile-picture']['tmp_name'], IMAGE_PATH . 'profil/' . $imgNewName);

        // Insertion des données dans la base de données
        $sql = "INSERT INTO `membre`(`civilite`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `adresse`, `code_postal`, `ville`, `pays`, `picture`) VALUES (:civilite, :pseudo, :mdp, :nom, :prenom, :email, :adresse, :code_postal, :ville, :pays, :picture)";

        $req = $pdo->prepare($sql);
        $req->bindValue(':civilite', $gender, PDO::PARAM_STR);
        $req->bindValue(':pseudo', $username, PDO::PARAM_STR);
        $req->bindValue(':mdp', $password, PDO::PARAM_STR);
        $req->bindValue(':nom', $lastname, PDO::PARAM_STR);
        $req->bindValue(':prenom', $firstname, PDO::PARAM_STR);
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':adresse', $address, PDO::PARAM_STR);
        $req->bindValue(':code_postal', $zipcode, PDO::PARAM_STR);
        $req->bindValue(':ville', $city, PDO::PARAM_STR);
        $req->bindValue(':pays', $country, PDO::PARAM_STR);
        $req->bindValue(':picture', $imgNewName, PDO::PARAM_STR);
        if ($req->execute()) {
            header('Location: login.php');
        }
    }
}

?>


<!-- Fin Header -->

<?php
require_once './partials/header.php';

// Afficher les erreurs
/* if (!empty($errors)) {
    foreach ($errors as $err) {
        echo '<div class="alert alert-warning alert-dismissible fade show w-75 mx-auto" role="alert">
  <strong>Alert!</strong> ' . $err . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
} */
?>
<div class="container">

    <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">
            Inscrivez-vous
        </h1>

        <form class="p-5" action="" method="POST" enctype="multipart/form-data">
            <div class="info mb-3 row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                            <label class="form-check-label" for="male">Homme</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Femme</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="autre" value="autre">
                            <label class="form-check-label" for="autre">Autre</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" id="firstname" class="form-control form-control-lg form-control form-control-lg-lg" placeholder="Entrez votre prénom" name="firstname" value="<?= $firstname ?? '' ?>">
                        </div>
                        <?php if (isset($error_firstname)) : ?>
                            <div class="text-danger"><?= $error_firstname ?></div>
                        <?php endif; ?>

                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Entrez votre nom d'utilisateur" name="username" value="<?= $username ?? '' ?>">
                        </div>
                        <?php if (isset($error_username)) : ?>
                            <div class="text-danger"><?= $error_username ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe">
                        </div>
                        <?php if (isset($error_password)) : ?>
                            <div class="text-danger"><?= $error_password ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                            <input type="text" name="address" class="form-control form-control-lg" placeholder="Entrez votre adresse" value="<?= $address ?? '' ?>">
                        </div>
                        <?php if (isset($error_address)) : ?>
                            <div class="text-danger"><?= $error_address ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="zipcode" class="form-control form-control-lg" placeholder="Entrez votre code postal" value="<?= $zipcode ?? '' ?>">
                        </div>
                        <?php if (isset($error_zipcode)) : ?>
                            <div class="text-danger"><?= $error_zipcode ?></div>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Entrez votre nom" value="<?= $lastname ?? '' ?>">
                        </div>
                        <?php if (isset($error_lastname)) : ?>
                            <div class="text-danger"><?= $error_lastname ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="text" name="email" class="form-control form-control-lg" placeholder="Entrez votre email" value="<?= $email ?? '' ?>">
                        </div>
                        <?php if (isset($error_email)) : ?>
                            <div class="text-danger"><?= $error_email ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="confirm-password" class="form-control form-control-lg" placeholder="Confirmez votre mot de passe">
                        </div>
                        <?php if (isset($error_confirm_password)) : ?>
                            <div class="text-danger"><?= $error_confirm_password ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-building"></i></span>
                            <input type="text" name="city" class="form-control form-control-lg" placeholder="Entrez votre ville" value="<?= $city ?? '' ?>">
                        </div>
                        <?php if (isset($error_city)) : ?>
                            <div class="text-danger"><?= $error_city ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-text form-control-lg" for="country"><i class="bi bi-globe"></i></label>
                            <select class="form-select" name="country">
                                <option value="france">France</option>
                                <option <?php if (isset($country) && $country == 'belgique') echo 'selected' ?> value="belgique">Belgique</option>
                                <option <?php if (isset($country) && $country == 'suisse') echo 'selected' ?> value="suisse">Suisse</option>
                                <option <?php if (isset($country) && $country == 'canada') echo 'selected' ?> value="canada">Canada</option>
                                <option <?php if (isset($country) && $country == 'autre') echo 'selected' ?> value="autre">Autre</option>
                            </select>
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="profile-picture" accept="image/*">
                    </div>


                </div>
            </div>

            <div class="d-flex mb-3">
                Déjà inscrit ? <a href="login.php" class="text-decoration-none text-dark mx-1"> Connectez-vous</a>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">
                S'inscrire
            </button>
        </form>

    </main>

</div>


<?php
require_once './partials/footer.php';
?>

<script>
    let showMessage = document.querySelector('.alert-dismissible');


    console.log(showMessage);
</script>