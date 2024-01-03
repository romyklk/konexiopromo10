<?php

/* Créer une classe Cart avec les propriétés suivantes :
    stock => integer
    prix => float
    titre => string
    disponible => boolean
    commandes => array

Créer les méthodes suivantes :
   ajouterArticle() => ajoute un article au panier.Cette méthode prend en argument: le stock, le prix, le titre ,la disponibilité et la commande.Veuillez préciser le type de chaque argument.

   retirerArticle() => retire un article du panier.Cette méthode prend en argument: le stock, le prix, le titre ,la disponibilité et la commande.Veuillez préciser le type de chaque argument.Cette méthode doit retourner une chaine de caractère qui indique que l'article a été retiré du panier.

   afficherArticle() => affiche les articles du panier.Cette méthode prend en argument: le stock, le prix, le titre ,la disponibilité et la commande.Veuillez préciser le type de chaque argument.Cette méthode doit retourner un tableau contenant les articles du panier.

   Toutes les méthodes doivent être publiques ainsi que les propriétés.

   Créer un objet panier et testez les différentes méthodes. */

class Cart
{
    public int $stock;
    public float $prix;
    public string $titre;
    public bool $disponible;
    public array $commandes;

    public function ajouterArticle(int $stock, float $prix, string $titre, bool $disponible):void
    {
        echo "L'article a été ajouté au panier";
    }

    public function retirerArticle(int $stock, float $prix, string $titre, bool $disponible):string
    {
        return "L'article a été retiré du panier";
    }

    public function afficherArticle(int $stock, float $prix, string $titre, bool $disponible):array
    {
        return [
            "stock" => $stock,
            "prix" => $prix,
            "titre" => $titre,
            "disponible" => $disponible
        ];
    }

}

$cart = new Cart();

$cart->ajouterArticle(10, 20.5, "Livre", true);
echo "<br>";
echo $cart->retirerArticle(10, 20.5, "Livre", true);
echo "<br>";
var_dump($cart->afficherArticle(10, 20.5, "Livre", true));