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
                        <input type="search" class="form-control form-control-lg" placeholder="Recherchez un produit" aria-label="Search">
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
                            <li><a class="dropdown-item" href="#">Profil</a></li>
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

        <div class="container">

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">
                    Inscrivez-vous
                </h1>

                <form class="p-5">
                    <div class="info mb-3 row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
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
                                    <input type="text" id="firstname" class="form-control form-control-lg form-control form-control-lg-lg" placeholder="Entrez votre prénom">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" id="username" class="form-control form-control-lg" placeholder="Entrez votre nom d'utilisateur">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                                    <input type="text" id="address" class="form-control form-control-lg" placeholder="Entrez votre adresse">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" id="zipcode" class="form-control form-control-lg" placeholder="Entrez votre code postal">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" id="lastname" class="form-control form-control-lg" placeholder="Entrez votre nom">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="text" id="email" class="form-control form-control-lg" placeholder="Entrez votre email">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" id="confirm-password" class="form-control form-control-lg" placeholder="Confirmez votre mot de passe">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                                    <input type="text" id="city" class="form-control form-control-lg" placeholder="Entrez votre ville">
                                </div>
                                <div id="helpBlock" class="form-text"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label class="input-group-text form-control-lg" for="country"><i class="bi bi-globe"></i></label>
                                    <select class="form-select" id="country">
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
                                <input type="file" class="form-control" id="profile-picture" accept="image/*">
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
                            <input id="newsletter1" type="text" class="form-control form-control-lg" placeholder="Email address">
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