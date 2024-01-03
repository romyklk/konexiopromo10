<?php

/* "Imaginez que vous êtes en charge de créer une classe `Etudiant` dans un système de gestion académique. Cette classe doit avoir les propriétés private : nom, prénom, âge, classe et moyenne.

Votre tâche consiste à mettre en place la classe `Etudiant` avec ces propriétés et à implémenter une méthode `sePresenter()` qui affiche les informations de l'étudiant. 

Vous devez inclure des mécanismes de validation appropriés pour éviter les erreurs lors de la définition des valeurs des propriétés. Par exemple, l'âge doit être un entier entre 18 et 30 ans, la moyenne doit être un nombre entre 0 et 20, etc

Si une erreur se produit, vous devez afficher un message d'erreur spécifique pour informer l'utilisateur de la nature de l'erreur.

Vous devez ensuite créer deux instances d'étudiants en utilisant cette classe et les faire se présenter en appelant la méthode `sePresenter()` pour chacun d'eux.

Veillez à réaliser cet exercice en utilisant uniquement les fonctionnalités de la classe `Etudiant`, sans modifier le code extérieur à la classe.(passer par le constructeur) */

class Etudiant
{
    private $nom, $prenom, $age, $classe, $moyenne;

    public function __construct($nom, $prenom, $age, $classe, $moyenne)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setClasse($classe);
        $this->setMoyenne($moyenne);
    }

    // SETTERS

    public function setNom($nom)
    {
        if (empty($nom)) {
            echo "Le nom ne peut pas être vide";
        } else {
            $this->nom = $nom;
        }
    }

    public function setPrenom($prenom)
    {
        if (empty($prenom)) {
            echo "Le prénom ne peut pas être vide";
        } else {
            $this->prenom = $prenom;
        }
    }

    public function setAge($age)
    {
        if ($age < 18 || $age > 30) {
            echo "L'âge doit être compris entre 18 et 30 ans";
        } else {
            $this->age = $age;
        }
    }

    public function setClasse($classe)
    {
        if (empty($classe)) {
            echo "La classe ne peut pas être vide";
        } else {
            $this->classe = $classe;
        }
    }

    public function setMoyenne($moyenne)
    {
        if ($moyenne < 0 || $moyenne > 20) {
            echo "La moyenne doit être comprise entre 0 et 20";
        } else {
            $this->moyenne = $moyenne;
        }
    }

    // GETTERS
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function getMoyenne()
    {
        return $this->moyenne;
    }

    public function sePresenter()
    {
        echo "Bonjour, je m'appelle " . $this->getNom() . " " . $this->getPrenom() . ", j'ai " . $this->getAge() . " ans, je suis en " . $this->getClasse() . " et ma moyenne est de " . $this->getMoyenne() . " !";
    }
}

$etudiant1 = new Etudiant("Dupont", "Jean", 25, "B2", 15);
$etudiant1->sePresenter();
echo "<br>";
