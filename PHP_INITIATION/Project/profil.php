<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Projet Boutique PHP</title>
</head>
<style>
    .carousel-img {
        height: 300px;
    }

    .custom-border {
        border: 1px solid black;
    }

    .custom-border:hover {
        border: 1px solid black;
        background-color: lightgray;
    }
</style>

<body>

    <div class="container-fluid">
        <!-- Header -->
        <header class="p-3 mb-3 border-bottom shadow-lg">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                        <img src="./public/assets/upload/logo/logo.png" alt="" width="40" height="32" class="me-2">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 link-dark">Accueil</a></li>
                        <li><a href="shop.php" class="nav-link px-2 link-body-emphasis">Boutique</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Catégories</a></li>
                        <li><a href="#" class="nav-link px-2 link-body-emphasis">Contact</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control" placeholder="Recherchez un produit" aria-label="Search">
                    </form>

                    <div class="d-flex align-items-center me-lg-3">
                        <a href="register.php" class="nav-link px-2 link-body-emphasis position-relative me-2">
                            <i class="bi bi-person-lines-fill fs-4"></i>
                        </a>
                        <a href="login.php" class="nav-link px-2 link-body-emphasis position-relative me-2">
                            <i class="bi bi-box-arrow-in-right fs-4"></i>
                        </a>
                        <a href="#" class="nav-link px-2 link-body-emphasis position-relative me-2">
                            <i class="bi bi-cart3 fs-3"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                9+
                            </span>
                        </a>
                    </div>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Réglages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-box-arrow-in-right fs-4"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <!-- Fin Header -->


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
                                <a class="nav-link" href="#logout-content">
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
                                        <img src="https://randomuser.me/api/portraits/women/88.jpg" alt="Photo de profil" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-md-9">
                                        <p>Nom: John Doe</p>
                                        <p>Email: john.doe@example.com</p>
                                        <p>Adresse: 123 Rue de la Liberté, Ville</p>
                                        <p>Téléphone: +123 456 7890</p>
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

        <!-- Footer -->

        <footer class="pt-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Newsletter</h5>
                        <p>
                            Souscrivez à notre newsletter pour recevoir les dernières informations sur nos produits.
                        </p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Votre Email</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Souscrire</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between  border-top">
                <p>
                    &copy; 2023. Made with <span class="text-danger fs-5">&hearts;</span> by KONEXIO 10
                </p>
                <button type="button" class="btn btn-tranparent mb-1 custom-border">
                    <a href="#" class="text-decoration-none text-light">
                        <i class="bi bi-caret-up-square" style="color: black;"></i>
                    </a>
                </button>


            </div>
        </footer>

        <!-- Fin Footer -->
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>