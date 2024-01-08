<?php
/* 
les namespaces permettent de déclarer des espaces de noms pour éviter les conflits de noms de classes, de fonctions, de constantes, etc.

Pour déclarer un namespace, on utilise le mot-clé namespace suivi du nom du namespace.
 */

namespace App\Tables;
class PDO 
{
    public function show()
    {
        echo "SHOW PDO <br>";
    }
}

echo "<br>";
// __NAMESPACE__ est une constante magique qui contient le namespace dans lequel on se trouve
echo __NAMESPACE__ . "<br>"; // Affiche App\Tables

$pdo = new PDO();
$pdo->show(); // Affiche SHOW PDO

$database = new \PDO('mysql:host=localhost;dbname=entreprise', 'root', '');

var_dump($database); // Affiche object(PDO)#1 (0) { }
