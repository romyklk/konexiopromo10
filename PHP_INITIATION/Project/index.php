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
                            <img src="https://randomuser.me/api/portraits/women/88.jpg" alt="user random" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Réglages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./admin/index.php">Backoffice</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">
                                    <i class="bi bi-box-arrow-in-right fs-4">
                                    </i>
                                    Logout
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <!-- Fin Header -->

        <div class="container">
            <!-- Hero Section -->
            <div class="row">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">

                            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <img src="./public/assets/upload/shop/4896649.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                    </div>
                                    <div class="carousel-item">

                                        <img src="./public/assets/upload/shop/9836.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./public/assets/upload/shop/heroes3.svg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                                Bienvenue sur la boutique PHP
                            </h2>
                            <p class="lead">
                                Ceci est un projet de boutique en ligne réalisé en PHP procédural par KONEXIO 10 afin de valider notre module sur les bases de PHP.
                                Cet projet constitue notre premier projet en PHP et ne met pas en avant toutes les notions de PHP.C'est un projet qui nous a permis de nous familiariser avec le langage PHP.
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Découvrir nos produits</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Nos Catégories</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Hero Section -->



            <!-- Produits Section -->

            <div class="row">
                <div class="col-md-12">
                    <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-center">
                        Nos derniers produits
                    </h2>
                </div>

                <main>

                    <div class="album py-5 bg-body-tertiary">
                        <div class="container">

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2020/10/15/07/45/playstation-5656248_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">Gaming</span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2019/01/24/23/54/nintendo-switch-3953601_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">TV</span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2020/03/24/18/38/xbox-4965065_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">
                                                Electroménager
                                            </span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2016/11/29/06/18/home-office-1867761_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">
                                                Informatique
                                            </span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2020/10/15/07/45/playstation-5656248_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">
                                                Vélo
                                            </span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="https://cdn.pixabay.com/photo/2020/10/15/07/45/playstation-5656248_1280.jpg" class="d-block mx-lg-auto img-fluid carousel-img" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                        <div class="card-body">
                                            <span class="badge text-bg-warning">
                                                Gaming
                                            </span>
                                            <p class="card-text">Cette description brève présente les caractéristiques du produit illustré par l'image associée, offrant un aperçu complet de ses fonctionnalités et de son attrait..</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i> Voir ce produit</button>
                                                </div>
                                                <small class="text-body-dark fw-bold">125 €</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </main>
            </div>

            <!-- Fin Produits Section -->
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