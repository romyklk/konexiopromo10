<?php 
require_once 'database.php';
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // Vérifier si l'email et le mot de passe sont remplis
    $errors = [];
    if(empty($_POST['email']))
    {
        $errors['email'] = "L'email est obligatoire";
    }
    if(empty($_POST['password']))
    {
        $errors['password'] = "Le mot de passe est obligatoire";
    }
    // Véfifier le format de l'email
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "L'email n'est pas valide";
    }
    // Vérifier si l'email existe dans la base de données
    $query = $bdd->prepare('SELECT * FROM user WHERE email = :email');
    $query->bindValue(':email', $_POST['email']);
    $query->execute();

    if($query->rowCount() >=1){
        // Récupérer l'utilisateur
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        // Vérifier si le mot de passe est correct
        if(password_verify($_POST['password'],$user['password']))
        {
            // Créer une session
            //session_start();
            $_SESSION['user']['id'] = $user['id_user'];
            $_SESSION['user']['email'] = $user['email'];
            $_SESSION['user']['nom'] = $user['nom'];
            $_SESSION['user']['prenom'] = $user['prenom'];

            // Rediriger l'utilisateur vers la page d'accueil
            header('Location: index.php');
        }else{
            $errors['password'] = "Le mot de passe est incorrect";
        }

    }else{
        $errors['email'] = "L'email n'existe pas";
    }

}

?>

<?php require_once 'Common/header.php'; ?>
<h1 class="text-center">
    Se connecter
</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="" method="POST" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-success mt-3">Connexion</button>

            </form>
        </div>
    </div>
</div>
<?php require_once 'Common/footer.php'; ?>