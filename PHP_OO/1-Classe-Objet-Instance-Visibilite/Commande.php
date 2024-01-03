<?php

class Commande 
{
    public $data = [];

    public function addToCommande()
    {
        $this->data[] = [
            "stock" => $this->stock,
            "prix" => $this->prix,
            "titre" => $this->titre,
            "disponible" => $this->disponible
        ];
    }
}