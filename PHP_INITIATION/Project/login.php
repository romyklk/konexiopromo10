<?php
require_once './inc/init.php';


// Redirection si l'utilisateur est déjà connecté

if (userConnected()) {
    header('Location: profil.php');
    exit();
}
// Traitement du formulaire

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars(addslashes($value));
    }
    $email = $_POST['email'];


    // Je vérifie que l'email existe en BDD

    $query = "SELECT * FROM membre WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();
    // Si rowCount() renvoie 1, alors l'email existe en BDD

    if ($stmt->rowCount() >= 1) {

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //var_dump($user);
        // Je vérifie que le mot de passe saisi correspond au mot de passe en BDD
        //password_verify() permet de comparer un mot de passe en clair avec un mot de passe hashé

        if (password_verify($_POST['password'], $user['mdp'])) {
            // Si le mot de passe est correct, je connecte l'utilisateur
            // Je stocke les informations de l'utilisateur dans la session
            $_SESSION['user']['id_membre'] = $user['id_membre'];
            $_SESSION['user']['pseudo'] = $user['pseudo'];
            $_SESSION['user']['nom'] = $user['nom'];
            $_SESSION['user']['prenom'] = $user['prenom'];
            $_SESSION['user']['email'] = $user['email'];
            $_SESSION['user']['civilite'] = $user['civilite'];
            $_SESSION['user']['statut'] = $user['statut'];
            $_SESSION['user']['created_at'] = $user['created_at'];
            $_SESSION['user']['avatar'] = $user['picture'];
            $_SESSION['user']['adresse'] = $user['adresse'];
            $_SESSION['user']['code_postal'] = $user['code_postal'];
            $_SESSION['user']['ville'] = $user['ville'];
            $_SESSION['user']['pays'] = $user['pays'];

            // Je redirige l'utilisateur vers la page d'accueil
            header('Location: profil.php');
        } else {
            $errors[] = 'Le mot de passe est incorrect';
        }
    } else {
        $errors[] = 'Cet email n\'existe pas en BDD';
    }
}
?>





<!-- PARTIE HTML -->
<?php
require_once './partials/header.php';
generateErrorMessage($errors);
?>
<!-- Fin Header -->

<div class="container">

    <main class="form-signin w-50 m-auto">


        <img class="mb-4" src="./public/assets/upload/logo/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal text-center">
            Veuillez vous connecter
        </h1>
        <form class="w-100 shadow rounded p-5" method="post" action="">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Entrez votre email" name="email" value="<?= $email ?? '' ?>">
                <label for="floatingInput">
                    Entrez votre email
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">
                    Entrez votre mot de passe
                </label>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <a href="#" class="text-decoration-none">
                        Mot de passe oublié ?
                    </a>
                </div>
                <div>
                    Pas encore inscrit ? <a href="register.php" class="text-decoration-none text-dark mx-1">
                        Inscrivez-vous
                    </a>
                </div>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </main>

</div>




<?php
require_once './partials/footer.php';
?>

