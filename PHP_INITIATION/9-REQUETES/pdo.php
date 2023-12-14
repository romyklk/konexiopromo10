<?php
/* 
Nous allons voir comment utiliser PDO pour se connecter à une base de données.

PDO(php data object) est l'extension PHP qui permet de se connecter à une base de données.

Pour se connecter, il faut :
- un serveur : localhost
- une base de données : entreprise
- un login : root
- un mot de passe : (rien) sur windows, 'root' sur mac

Nous pouvons ajouter un tableau d'options en 4ème argument de la fonction PDO :
- PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING : pour afficher les erreurs SQL dans le navigateur
- PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' : pour définir le charset des échanges avec la BDD
*/

$pdo = new PDO(
    'mysql:host=localhost;dbname=entreprise','root','',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]
);

var_dump($pdo);

/* echo '<pre>';
print_r(get_declared_classes());
echo '</pre>';
 */
/* echo '<pre>';
print_r(get_class_methods($pdo));
echo '</pre>'; */

//// EXEC() ////

/* 
Exec() est utilisée pour la formulation de requêtes ne retournant pas de résultat : INSERT, UPDATE, DELETE.
*/
echo '<h2>Exec() INSERT, UPDATE, DELETE </h2>';

//$result = $pdo->exec('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ("Jean", "Dujardin", "m", "informatique", "2018-01-01", 2000)');

//echo "Nombre d'enregistrements affectés par l'INSERT : $result <br>";
//echo "Dernier id généré : " . $pdo->lastInsertId() . '<br>';


// Mettre à jour le salaire de l'employé dont l'id_employes est 350 à 2950

$result2 = $pdo->exec('UPDATE employes SET salaire = 2950 WHERE id_employes = 350');


echo "<br>";

///// QUERY() //////

/*
Au contraire de exec(), query() est utilisée pour la formulation de requêtes retournant un ou plusieurs résultats : SELECT mais aussi DELETE, UPDATE et INSERT.

*/

echo '<hr><h2>Query() SELECT (plusieurs résultats)</h2>';

/* 
Quand on fait une requête de type SELECT avec query(), on obtient un objet PDOStatement qui contient 1 ou plusieurs jeux de résultats :

Pour rendre cet resultat(object PDOStatement) exploitable, il nous faut le transformer en tableau avec la méthode fetch() :

- fetch() avec le paramètre PDO::FETCH_NUM : transforme l'objet PDOStatement en un array indexé numériquement

- fetch() avec le paramètre PDO::FETCH_ASSOC : transforme l'objet PDOStatement en un array associatif

- fetch() avec le paramètre PDO::FETCH_BOTH : transforme l'objet PDOStatement en un array associatif et numérique

- fetch() avec le paramètre PDO::FETCH_OBJ : transforme l'objet PDOStatement en un objet anonyme dont les propriétés publiques correspondent aux champs de la requête

- fetch() avec le paramètre PDO::FETCH_CLASS : transforme l'objet PDOStatement en un objet d'une classe spécifique dont les propriétés correspondent aux champs de la requête


On obtient un tableau par enregistrement, et chaque enregistrement est un tableau associatif indexé par le nom des champs de la requête SQL.


NB: fetchAll() retourne toutes les lignes de résultats dans un tableau multidimensionnel.

*/
// Récupérer les infos de julien

$data = $pdo->query('SELECT * FROM employes WHERE prenom = "Julien"');

var_dump($data);

$info = $data->fetch(PDO::FETCH_ASSOC);

foreach($info as $indice => $valeur){
    echo "<b>$indice : 

    </b> $valeur <br>";
}

// Liste des employés dans un tableau HTML

$resultat = $pdo->query('SELECT * FROM employes');

echo "Le nombre d'employés est de " . $resultat->rowCount() . ' employés<br>';
echo "Le nombre de colonnes est de " . $resultat->columnCount() . ' colonnes<br>';
// getColumnMeta() est une méthode qui retourne les informations sur les colonnes d'une table :
// rowCount() est une méthode qui retourne le nombre de lignes retournées par la requête
// columnCount() est une méthode qui retourne le nombre de colonnes retournées par la requête


echo "<table border=5><tr>";
for($i=0; $i < $resultat->columnCount(); $i++){
    $colonne = $resultat->getColumnMeta($i);
    echo '<th>' . $colonne['name'] . '</th>';
}
echo "</tr>";
while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach($ligne as $valeur){
        echo "<td>$valeur</td>";
    }
    echo "</tr>";
}

echo "</table>";


echo '<hr><h2>PREPARE() + EXECUTE() </h2>';

/* 
Une requête préparée est préparée une seule fois mais elle peut être exécutée plusieurs fois avec des valeurs différentes.

Les requêtes préparées sont préconisées si vous exécutez plusieurs fois la même requête et ainsi éviter de répéter le cycle complet analyse / interprétation / exécution réalisé par le SGBD (gain de performance).

Aussi, cela permet de se prémunir des injections SQL car en liant les marqueurs à leur valeur, on neutralise les injections SQL.

prepare() : méthode de l'objet PDO qui permet de préparer la requête mais ne l'exécute pas.

execute() : méthode de l'objet PDOStatement qui permet d'exécuter une requête préparée.

*/

echo '<h3>Requête préparée avec BINPARAM</h3>';

// Récupérer les infos de chloé

$prenom = 'Chloé';

$req = $pdo->prepare('SELECT * FROM employes WHERE prenom = :prenom');	// :prenom est un marqueur nominatif qui est en attente d'une valeur

$req->bindParam(':prenom', $prenom, PDO::PARAM_STR);

// bindParam() reçoit exclusivement une variable vers laquelle pointe le marqueur : si on change la valeur de la variable, le marqueur change automatiquement de valeur lors de l'exécution de la requête sans avoir à refaire un bindParam().

// PD0::PARAM_STR est une constante qui indique que le marqueur est de type string
// PD0::PARAM_INT est une constante qui indique que le marqueur est de type int
// PD0::PARAM_BOOL est une constante qui indique que le marqueur est de type booléen
// PD0::PARAM_NULL est une constante qui indique que le marqueur est de type NULL

// Si le paramètre est de type string, il n'est pas obligatoire de mettre PDO::PARAM_STR car c'est le type par défaut.

$req->execute(); // on exécute la requête préparée avec les valeurs des marqueurs


$donnees = $req->fetch(PDO::FETCH_ASSOC);

echo implode(' - ',$donnees);


echo '<h3>Requête préparée avec BINVALUE</h3>';

// Récupérer les infos de julien

// bindValue() reçoit une valeur ou une variable vers laquelle pointe le marqueur : si on change la valeur de la variable, le marqueur ne change pas lors de l'exécution de la requête.

$req = $pdo->prepare('SELECT * FROM employes WHERE prenom = :prenom');	// :prenom est un marqueur nominatif qui est en attente d'une valeur

$req->bindValue(':prenom', 'Amandine', PDO::PARAM_STR);

$req->execute(); // on exécute la requête préparée avec les valeurs des marqueurs

$info = $req->fetch(PDO::FETCH_ASSOC);

foreach($info as $indice => $valeur){
    echo "<b>$indice : 

    </b> $valeur <br>";
}