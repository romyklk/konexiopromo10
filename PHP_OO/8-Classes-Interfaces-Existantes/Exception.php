<?php

/* 
Exception est une manière plus élaborée de gérer les erreurs de type "fatale error" ou "warning".

Nous avons donc la possibilité de gérer les erreurs de manière plus précise et plus propre en personnalisant les messages d'erreur.

*/


function divide($numerateur, $denominateur) {

    // try permet de tester le code qui peut générer une exception
    try{

        if($denominateur === 0) {

            // throw new Exception permet de lever une exception
            throw new Exception("Division par zéro impossible");

        }else{
            $resultat = $numerateur / $denominateur;
            echo $resultat;
        }

    }catch(Exception $e){
        // getMessage() permet de récupérer le message d'erreur
        echo "Une erreur est survenue : " . $e->getMessage();
    }
    
}

divide(10, 0);
echo "<br>";
divide(10, 2);

echo "<hr>";

// Exemple 2
try{

    // Variables de connexion à la base de données
    $host = "localhost";
    $dbname = "entreprise";
    $username = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    ];

    $pdo = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM employes";

    $stmt = $pdo->query($sql);

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row["prenom"] . "<br>";
    }
    
}catch(PDOException $e){
    echo "Une erreur est survenue : " . $e->getMessage();
}