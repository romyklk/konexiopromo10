<?php
require_once 'database.php';
// Déconnecter l'utilisateur via la page index.php en utilisant la méthode GET

if(isset($_GET['action']) && $_GET['action'] == 'logout')
{
    session_destroy();
    header('Location: index.php');
}

?>


<?php require_once 'Common/header.php'; ?>
<h1 class="text-center">
    Bienvenue sur le mini-blog
</h1>

<?php 

if(isset($_SESSION['user'])): ?>
    <div class="alert alert-success">
        Vous êtes connecté en tant que <?= $_SESSION['user']['prenom'] ?> <?= $_SESSION['user']['nom'] ?>
    </div>
<?php endif; ?>
<?php require_once 'Common/footer.php'; ?>

