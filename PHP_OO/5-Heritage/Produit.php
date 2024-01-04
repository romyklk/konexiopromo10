<?php
/* 
EXERCICE :

Dans cet exercice, vous allez créer une hiérarchie de classes pour représenter des produits, des clients et des commandes dans une boutique en ligne.

1. Créez une classe de base appelée `Produit` avec les propriétés protected suivantes :
   - `nom` (string) : le nom du produit
   - `prix` (float) : le prix du produit

2. Ajoutez un constructeur à la classe `Produit` qui accepte le nom et le prix du produit et les initialise.

3. Créez une classe `Article` qui hérite de la classe `Produit`. Cette classe représente un produit dans une boutique en ligne et doit avoir les propriétés protected supplémentaires suivantes :
   - `description` (string) : la description du produit
   - `stock` (int) : la quantité disponible en stock

4. Ajoutez un constructeur à la classe `Article` qui accepte le nom, le prix, la description et le stock du produit et les initialise en utilisant le constructeur de la classe parente.

5. Créez une classe `Client` avec les propriétés protected suivantes :
   - `nom` (string) : le nom du client
   - `adresse` (string) : l'adresse du client
   - `email` (string) : l'adresse e-mail du client

6. Ajoutez un constructeur à la classe `Client` qui accepte le nom, l'adresse et l'e-mail du client et les initialise.

7. Créez une classe `Commande` avec les propriétés suivantes :
   - `client` (objet de type `Client`) : le client passant la commande
   - `articles` (array) : un tableau contenant les articles commandés

8. Ajoutez un constructeur à la classe `Commande` qui accepte un objet de type `Client` et un tableau d'articles commandés. Initialisez les propriétés correspondantes avec les valeurs fournies.

9. Ajoutez une méthode `ajouterArticle()` à la classe `Commande` qui accepte un objet de type `Article` et l'ajoute au tableau des articles commandés.

10. Ajoutez une méthode `calculerTotal()` à la classe `Commande` qui calcule le montant total de la commande en additionnant les prix des articles commandés.

11. Créez des instances d'articles, de clients et de commandes en utilisant les constructeurs des classes respectives, en fournissant les valeurs appropriées pour les propriétés.

12. Ajoutez des articles à la commande en utilisant la méthode `ajouterArticle()`.

13. Appelez la méthode `calculerTotal()` sur l'instance de commande pour obtenir le montant total de la commande.

14. Affichez le message : "Le client {nom du client} a commandé {nombre d'articles commandés} articles pour un montant total de {montant total de la commande} euros." en utilisant les valeurs des propriétés de l'instance de commande.

15. Affichez la liste des articles commandés en affichant le nom et le prix de chaque article.
 */

class Produit
{
    protected $nom;
    protected $prix;

    public function __construct(string $nom, float $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

class Article extends Produit
{
    protected $description;
    protected $stock;

    public function __construct(string $nom, float $prix, string $description, int $stock)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
        $this->stock = $stock;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
}


class Client 
{
    protected $nom;
    protected $adresse;
    protected $email;

    public function __construct(string $nom, string $adresse, string $email)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->email = $email;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

class Commande 
{
    protected $client;
    protected $articles;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->articles = [];
    }

    public function ajouterArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    public function calculerTotal()
    {
        $total = 0;
        foreach ($this->articles as $article) {
            $total += $article->getPrix();
        }

        return $total;
    }


    /**
     * Get the value of articles
     */ 
    public function getArticles()
    {
        return $this->articles;
    }
}

$article1 = new Article('Article 1', 10, 'Description 1', 10);
$article2 = new Article('Article 2', 20, 'Description 2', 20);
$article3 = new Article('Article 3', 30, 'Description 3', 30);

$client = new Client('Client 1', 'Adresse 1', 'Email 1');

$commande = new Commande($client);
$commande->ajouterArticle($article1);
$commande->ajouterArticle($article2);
$commande->ajouterArticle($article3);

$totalCommande = $commande->calculerTotal();

echo "Le client" . $client->getNom() . " a commandé " . count($commande->getArticles()) . " articles pour un montant total de " . $totalCommande . " euros. <br>";

echo "La liste des articles commandés : <br>";

foreach ($commande->getArticles() as $article) {
    echo $article->getNom() . " - " . $article->getPrix() . " euros <br>";
}


