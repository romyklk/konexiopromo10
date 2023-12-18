// Vérifier si tous les champs sont remplis

if(empty($gender) || empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($confirmPassword) || empty($address) || empty($zipcode) || empty($city) || empty($country)) {
$errors[] = "Tous les champs sont obligatoires <br>";
}

// Vérifier si le nom d'utilisateur contient au moins 3 caractères
if(strlen($username) < 2 || strlen($username)> 20) {
    $errors[] = "Le nom d'utilisateur doit contenir entre 2 et 20 caractères <br>";
    }

    // Vérifier le format de l'email
    // filter_var() permet de filtrer une variable avec un filtre spécifique
    // FILTER_VALIDATE_EMAIL permet de valider un email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "L'email n'est pas valide <br>";
    }

    // Regex pour vérifier le pseudo

    $pattern = '#^[a-zA-Z0-9.*-]+$#';

    // preg_match() permet de vérifier si une chaîne de caractères correspond à une expression regulière
    if(!preg_match($pattern, $username)) {
    $errors[] = "Le nom d'utilisateur n'est pas valide <br>";
    }

    // Vérifier si l'email existe déjà dans la base de données

    $sql = "SELECT email FROM users WHERE email = :email";
    $req = $pdo->prepare($sql);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->execute();
    // rowCount() permet de compter le nombre de lignes retournées par la requête
    if($req->rowCount() > 0) {
    $errors[] = "L'email existe déjà <br>";
    }

    var_dump($errors);