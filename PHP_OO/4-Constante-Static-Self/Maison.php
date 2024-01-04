<?php 

class Maison
{
	private static $nbPiece = 7; 
	public static $espaceTerrain = '500m²'; 
	public $couleur = 'blanc'; 
	const HAUTEUR = '10m';
	private $nbPorte = 10;

	public static function getNbPiece()
	{
		return self::$nbPiece;
	}
	
	public function getNbPorte()
	{
		return $this->nbPorte;
	}
}

//TODO : En utilisant la class Maison, répondez aux questions suivantes :


// 1- Quel est le nombre de pièces de la maison?
echo 'Nombre de pièces : ' . Maison::getNbPiece() . '<br>';

//2- Quelle est la superficie du terrain ?
echo 'La maison possède: ' . Maison::$espaceTerrain . '<br>';

//3- Quelle est la hauteur de la maison
echo 'La maison a une hauteur de : ' . Maison::HAUTEUR . '<br>';

//4- Créer un objet Maison(instancier la classe)
$maison = new Maison;

// 5- Quelle est la couleur de cette maison que vous aviez instancier ?

echo 'La maison est de couleur : ' . $maison->couleur . '<br>';

// 6- Quelle est le nombre de porte cette maison que vous aviez instancier ?

echo 'La maison possède : ' . $maison->getNbPorte() . ' portes <br>';

// 7- Modifier la couleur de cette maison en rouge puis afficher la couleur de cette maison.
$maison->couleur = 'rouge';
echo 'La maison est de couleur : ' . $maison->couleur . '<br>';

