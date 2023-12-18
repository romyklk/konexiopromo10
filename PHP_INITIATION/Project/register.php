<?php
require_once './partials/header.php';
require_once './inc/init.php';

//TRAITEMENT DU FORMUALIRE

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Constant d'erreurs

    define('ERROR_NOM', 'Le nom doit contenir entre 2 et 20 caractères');

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

    // Déclaration d'un tableau d'erreurs
    $errors = [];

    // Vérifier si tous les champs sont remplis

    if (empty($gender) || empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($address) || empty($zipcode) || empty($city) || empty($country)) {
        $errors[] = "Tous les champs sont obligatoires <br>";
    }

    // Vérifier si le nom d'utilisateur contient au moins 3 caractères
    if (strlen($username) < 2 || strlen($username) > 20) {
        $errors[] = "Le nom d'utilisateur doit contenir entre 2 et 20 caractères <br>";
    }

    // Vérifier le format de l'email
    // filter_var() permet de filtrer une variable avec un filtre spécifique
    // FILTER_VALIDATE_EMAIL permet de valider un email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide <br>";
    }

    // Regex pour vérifier le pseudo

    $pattern = '#^[a-zA-Z0-9.*-]+$#';

    // preg_match() permet de vérifier si une chaîne de caractères correspond à une expression regulière
    if (!preg_match($pattern, $username)) {
        $errors[] = "Le nom d'utilisateur n'est pas valide <br>";
    }

    // Vérifier si l'email existe déjà dans la base de données

    $sql = "SELECT email FROM membre WHERE email = :email";
    $req = $pdo->prepare($sql);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->execute();
    // rowCount() permet de compter le nombre de lignes retournées par la requête
    if ($req->rowCount() > 0) {
        $errors[] = "L'email existe déjà <br>";
    }

    // Vérifier si les 2 mots de passe sont identiques

    if ($password != $confirmPassword) {
        $errors[] = "Les mots de passe ne sont pas identiques <br>";
    } else {
        // password_hash() permet de hacher un mot de passe
        // PASSWORD_DEFAULT permet d'utiliser l'algorithme de hachage bcrypt
        $password = password_hash($password, PASSWORD_DEFAULT);
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
        if($req->execute()) {
            header('Location: login.php');
        }
    }


    // Afficher les erreurs

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo '<div class="alert alert-warning alert-dismissible fade show w-75 mx-auto" role="alert">
  <strong>Alert!</strong> ' . $err . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    }
}

?>


<!-- Fin Header -->

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
                            <input type="text" id="firstname" class="form-control form-control-lg form-control form-control-lg-lg" placeholder="Entrez votre prénom" name="firstname">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Entrez votre nom d'utilisateur" name="username">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                            <input type="text" name="address" class="form-control form-control-lg" placeholder="Entrez votre adresse">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <input type="text" name="zipcode" class="form-control form-control-lg" placeholder="Entrez votre code postal">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Entrez votre nom">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="text" name="email" class="form-control form-control-lg" placeholder="Entrez votre email">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="confirm-password" class="form-control form-control-lg" placeholder="Confirmez votre mot de passe">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-building"></i></span>
                            <input type="text" name="city" class="form-control form-control-lg" placeholder="Entrez votre ville">
                        </div>
                        <div id="helpBlock" class="form-text"></div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label class="input-group-text form-control-lg" for="country"><i class="bi bi-globe"></i></label>
                            <select class="form-select" name="country">
                                <option value="france">France</option>
                                <option value="belgique">Belgique</option>
                                <option value="suisse">Suisse</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="italie">Italie</option>
                                <option value="canada">Canada</option>
                                <option value="espagne">Espagne</option>
                                <option value="portugal">Portugal</option>
                                <option value="allemagne">Allemagne</option>
                                <option value="royaume-uni">Royaume-Uni</option>
                                <option value="usa">États-Unis</option>
                                <option value="australie">Australie</option>
                                <option value="japon">Japon</option>
                                <option value="auttre-pays">Autre</option>
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