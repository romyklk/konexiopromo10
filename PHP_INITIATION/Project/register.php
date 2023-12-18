<?php
require_once './partials/header.php';

?>


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


<?php
require_once './partials/footer.php';
?>