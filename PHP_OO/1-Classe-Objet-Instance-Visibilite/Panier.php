<?php

// Introduction à la POO avec PHP
/* 
La POO est un concept qui developper nos applications en utilisant des objets.

C'est un paradigme de programmation qui  à faire des objets structurés à partir de classes qui permettent de créer des instances de ces objets.

**Principe de la POO**

- L'encapsulation : C'est le fait de regrouper des données et des méthodes dans une classe.Elle définit la manière dont les données seront accessibles depuis l'extérieur.

- L'héritage : C'est le fait de créer une nouvelle classe à partir d'une classe existante. La nouvelle classe hérite de toutes les propriétés et méthodes de la classe existante.

- Le polymorphisme : C'est le fait de pouvoir utiliser une méthode de différentes manières. C'est le fait de pouvoir redéfinir une méthode dans une classe fille.

- L'abstraction : C'est le fait de pouvoir créer des classes abstraites qui ne peuvent pas être instanciées. C'est le fait de pouvoir définir des méthodes abstraites qui doivent être redéfinies dans les classes filles.
*/

// Pour créer une classe , on utilise le mot clé class suivi du nom de la classe(en PascalCase) et des accolades.La classe porte le nom du fichier dans lequel elle est définie.
class Panier
{
    // Une classe peut contenir des propriétés et des méthodes.
    // Une propriété ou attribut est une variable définit dans une classe.
    // Une méthode est une fonction définit dans une classe.

    public $nbProduit; // Propriété public

    protected $qteProduit; // Propriété protected

    private $prix; // Propriété private

    // Public, protected et private sont des visibilités qui permettent de définir la manière dont les propriétés et les méthodes seront accessibles depuis l'extérieur.

    // public : Les propriétés et les méthodes sont accessibles depuis l'extérieur de la classe.
    // protected : Les propriétés et les méthodes sont accessibles depuis la classe et les classes filles(héritage).
    // private : Les propriétés et les méthodes sont accessibles uniquement depuis la classe.

    // Méthode public. Par convention, les méthodes sont  camelCase, les constantes sont en MAJUSCULE séparées par des underscores.
    public function ajouterArticle()
    {
        // Traitement de la méthode
        return 'L\'article a été ajouté';
    }

    // Méthode protected
    protected function retirerArticle()
    {
        // Traitement de la méthode
        return 'L\'article a été retiré';
    }

    // Méthode private
    private function afficherArticle()
    {
        // Traitement de la méthode
        return 'Voici les articles';
    }

    public int $idClient; // Propriété typée
    public string $nomClient; // Propriété typée
    public float $total; // Propriété typée
    public bool $statut; // Propriété typée
    public $idCommande; // Propriété non typée

    public function orderDetails(int $idClient, string $nomClient, float $total, bool $statut, $idCommande)
    {
        // Traitement de la méthode
        return "Voici les détails de la commande de : $idClient, $nomClient, $total €, $statut, $idCommande";
    }
}

// Pour instancier une classe, on utilise le mot clé new suivi du nom de la classe et des parenthèses.

$panier1 = new Panier(); // Instanciation de la classe Panier
// $panier1 est un objet de la classe Panier qui possède toutes les propriétés et méthodes de la classe Panier.

var_dump($panier1); // Affiche les informations de l'objet $panier1 issu de la classe Panier

var_dump(get_class_methods($panier1)); // Affiche les méthodes public de la classe Panier

$panier1->nbProduit = 5; // On accède à la propriété public $nbProduit depuis l'extérieur de la classe Panier.

echo "Nombre de produits dans le panier1 : " . $panier1->nbProduit . "<br>"; // Affiche "Nombre de produits : 5"

//$panier1->qteProduit = 10; // Erreur fatale car on ne peut pas accéder à la propriété protected $qteProduit depuis l'extérieur de la classe Panier.

// $panier1->prix = 12; // Erreur fatale car on ne peut pas accéder à la propriété private $prix depuis l'extérieur de la classe Panier.
echo "<hr>";
$panier2 = new Panier(); // Instanciation de la classe Panier

echo "Nombre de produits dans le panier2 : " . $panier2->nbProduit . "<br>"; // Affiche "Nombre de produits : " Car la valeur de la propriété $nbProduit n'a pas été définie pour l'objet $panier2.