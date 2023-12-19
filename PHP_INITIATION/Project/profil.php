<?php
require_once './inc/init.php';

if (!userConnected()) {
    header('Location: login.php');
    exit;
}

// Si l'utilisateur clique sur le bouton logout alors on détruit la session et on le redirige vers la page d'accueil
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['user']);
    header('Location: index.php');
    exit;
}

?>


<?php
require_once './partials/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#mes-infos-content">
                            Mes infos
                            <i class="bi bi-person-fill"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mes-commandes-content">
                            Mes commandes
                            <i class="bi bi-box"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mon-adresse-content">
                            Mon adresse
                            <i class="bi bi-geo-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modifier-mot-de-passe-content">
                            Modifier mon mot de passe
                            <i class="bi bi-key"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faire-une-reclamation-content">
                            Faire une réclamation
                            <i class="bi bi-chat-square-dots"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php?action=logout">
                            Logout
                            <i class="bi bi-box-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenu principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Contenu de la page de profil -->

            <!-- Mes Infos -->
            <div id="mes-infos-content">
                <h2>Mes Informations Personnelles</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src= "<?= IMAGE_URL .'profil/'. $_SESSION['user']['avatar'] ?>" alt="avatar" class="img-fluid rounded-circle">
                            </div>
                            <div class="col-md-9">
                                <p>
                                    Nom : <?= $_SESSION['user']['nom'] . ' '. $_SESSION['user']['prenom'] ?>
                                </p>
                                <p>Email:
                                    <?= $_SESSION['user']['email'] ?>
                                </p>
                                <p>Adresse: 
                                    <?= $_SESSION['user']['adresse'] . ' ' . $_SESSION['user']['code_postal'] . ' ' . $_SESSION['user']['ville'] . ' ' . $_SESSION['user']['pays'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mes Commandes -->
            <div id="mes-commandes-content" class="mt-2">
                <h2>Mes Commandes</h2>

                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Commande</th>
                            <th scope="col">Montant</th>
                            <th scope="col">Date</th>
                            <th scope="col">Statut</th>
                        </tr>
                    </thead>
                    <tbody class="table-light ">
                        <tr>
                            <td>Commande #001</td>
                            <td>100€</td>
                            <td>2023-01-01</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>Commande #002</td>*
                            <td>200€</td>
                            <td>2023-01-05</td>
                            <td>Expédiée</td>
                        </tr>
                        <tr>
                            <td>Commande #003</td>
                            <td>300€</td>
                            <td>2023-01-10</td>
                            <td>En cours</td>
                    </tbody>
                </table>
            </div>

            <!-- Mon Adresse -->
            <div id="mon-adresse-content">
                <h2>Mes Adresses</h2>
                <p>Adresse: 123 Rue de la Liberté, Ville</p>
                <p>Code postal: 12345</p>
                <p>Ville: Ma Ville</p>
                <!-- Ajoutez d'autres informations d'adresse fictives si nécessaire -->
            </div>

            <!-- Modifier Mot de Passe -->
            <div id="modifier-mot-de-passe-content">
                <h2>Modifier Mot de Passe</h2>
                <form class="mb-3 w-50">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label">Mot de Passe Actuel</label>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Mot de passe actuel">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">Nouveau Mot de Passe</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Nouveau mot de passe">
                    </div>
                    <div class="mb-3">
                        <label for="confirmNewPassword" class="form-label">Confirmez le Nouveau Mot de Passe</label>
                        <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirmer le nouveau mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier Mot de Passe</button>
                </form>
            </div>

            <!-- Faire une Réclamation -->
            <div id="faire-une-reclamation-content">
                <h2>Faire une Réclamation sur une Commande</h2>
                <form class="mb-3 w-50">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Choisissez une commande</option>
                            <option value="1">Commande #001</option>
                            <option value="2">Commande #002</option>
                            <option value="3">Commande #003</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="reclamationMessage" rows="4" placeholder="Expliquez votre réclamation"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer Réclamation</button>
                </form>
            </div>

        </main>
    </div>
</div>



<?php
require_once './partials/footer.php';
?>