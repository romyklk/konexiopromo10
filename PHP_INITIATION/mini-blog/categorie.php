<?php 
require_once 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    if(empty($_POST['categorie']))
    {
        $errors['categorie'] = 'Le nom de la catégorie ne doit pas être vide';
    }

    if(strlen($_POST['categorie']) <= 3 || strlen($_POST['categorie']) > 20)
    {
        $errors['categorie'] = 'Le nom de la catégorie doit contenir entre 3 et 20 caractères';
    }

    $regex = '/^[a-zA-Z0-9_\- ]+$/';
    if(!preg_match($regex, $_POST['categorie']))
    {
        $errors['categorie'] = 'Le nom de la catégorie n\'est pas valide';
    }

    if(empty($errors)){
        $categorie = $_POST['categorie'];
        $query = "INSERT INTO categorie(nom_categorie) VALUES (:nom_categorie)";
        $req = $bdd->prepare($query);
        $req->bindValue(':nom_categorie', $categorie);
        if($req->execute()){
            header('Location: index.php');
        }
    }

    var_dump($errors);
}

?>

<?php require_once 'Common/header.php'; ?>
<h1 class="text-center">
    Ajouter une catégorie
</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="categorie">Categorie</label>
                    <input type="text" name="categorie" id="categorie" class="form-control" placeholder="Nom de la catégorie">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Ajouter</button>

            </form>
        </div>
    </div>
</div>
<?php require_once 'Common/footer.php'; ?>