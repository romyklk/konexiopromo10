<?php
//!\\ PHP 8: A partir de PHP 8, on peut déclarer les propriétés directement dans le constructeur

class Livre
{
    // Je peux déclarer les propriétés directement dans le constructeur
    public function __construct(
        private string $titre,
        private string $auteur,
        private int $nbPages,
        private string $editeur,
        private int $anneeEdition
    ) {
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function detailsLivre(): string
    {
        return "Le titre du livre est : $this->titre, écrit par $this->auteur, édité par $this->editeur en $this->anneeEdition.";
    }
}

$livre = new Livre("Le Seigneur des Anneaux", "J.R.R. Tolkien", 1137, "Christian Bourgois Editeur", 1972);

echo $livre->detailsLivre();