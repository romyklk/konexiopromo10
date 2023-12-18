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
                    <a href="#" class="nav-link px-2 link-body-emphasis position-relative me-2">
                        <i class="bi bi-person fs-4"></i>
                    </a>
                    <a href="#" class="nav-link px-2 link-body-emphasis position-relative me-2">
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
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Réglages</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin Header -->



    <main class="container mt-5">
        <div class="row">
            <aside class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">FILTRER PAR</h5>

                        <!-- Filtre par nom -->
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Recherchez un produit">
                        </div>

                        <!-- Filtre par prix -->
                        <form>

                            <!-- Filtre par ordre de prix -->
                            <div class="mb-3">
                                <select class="form-select" id="ordrePrix" name="ordrePrix">
                                    <option value="croissant">Prix Croissant</option>
                                    <option value="decroissant">Prix Décroissant</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="number" class="form-control" id="prixMin" name="prixMin" placeholder="Prix Minimum">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="prixMax" name="prixMax" placeholder="Prix Maximum">
                            </div>

                            <!-- Filtre par catégorie -->
                            <div class="mb-3">
                                <select class="form-select" id="categorie" name="categorie">
                                    <option value="categorie1">Catégorie 1</option>
                                    <option value="categorie2">Catégorie 2</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filtrer</button>
                        </form>
                    </div>
                </div>
            </aside>

            <section class="col-lg-9 row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
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
            </section>

            <!-- Pagination -->
            <div class="mx-auto mt-5 mb-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </div>

            <!-- Fin Pagination -->
        </div>
    </main>



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
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
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