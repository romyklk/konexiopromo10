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
                <button type="submit" class="btn btn-success mt-3">S'inscrire</button>

            </form>
        </div>
    </div>
</div>
<?php require_once 'Common/footer.php'; ?>