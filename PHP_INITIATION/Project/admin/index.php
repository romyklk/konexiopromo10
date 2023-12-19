<?php
require_once '../inc/db.php';
require_once "../inc/function.php";
session_start();

if (!userIsAdmin()) {
    header('Location: ../index.php');
    exit;
}
?>

<?php require_once 'header_admin.php'; ?>
    <!-- Contenu du tableau de bord -->
    <div class="content">
        <h2>Dashboard Content</h2>

    </div>


<?php require_once 'footer_admin.php'; ?>
