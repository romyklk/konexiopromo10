<?php 

/* 
Une trait est un regroupement de méthodes et de propriétés qui peut être importé dans une classe.

Les traits ont été introduits en PHP 5.4. pour permettre l'héritage multiple.

Un trait est déclaré avec le mot-clé trait suivi du nom du trait et d'un bloc de code.

Un trait peut être importé dans une classe avec le mot-clé use suivi du nom du trait.

Un trait n'est pas instanciable.
*/
// Déclaration du trait TPanier
trait TPanier
{
    public $nbProduit = 1; // Propriété de trait

    // Méthode de trait
    public function affichageProduits()  
    {
        return 'Affichage des produits ! <br>';
    }
}

trait TMembre
{
    public function affichageMembres()
    {
        return 'Affichage des membres ! <br>';
    }
}

class Site
{
    use TPanier, TMembre; // On importe les traits ici

    public function affichageSite()
    {
        return 'Affichage du site ! <br>';
    }
}

$site = new Site;
echo $site -> affichageProduits();
echo $site -> affichageMembres();
echo $site -> affichageSite();

// Un trait peut importer un autre trait
trait  A 
{
    public function testA()
    {
        return 'testA <br>';
    }
}

trait B
{
    use A; // On importe le trait A
    public function testB()
    {
        return 'testB <br>';
    }
}

class Test
{
    use B; // On importe le trait B
}

$test = new Test;
echo $test -> testA();
echo $test -> testB();

// Si une méthode est déclarée dans un trait et que la classe qui importe le trait possède une méthode du même nom, alors la méthode de la classe écrase la méthode du trait.

trait MonTrait
{
    public function monTrait()
    {
        return 'Méthode de trait <br>';
    }
}

class MaClasse
{
    use MonTrait;
    public function monTrait()
    {
        return 'Méthode de classe <br>';
    }
}

$maClasse = new MaClasse;
echo $maClasse -> monTrait();

// Il est possible de donner un alias à une méthode de trait importée dans une classe avec le mot-clé as.

trait ShowUser
{
    public function presentation()
    {
        return " Je suis le method presentation du trait ShowUser <br>";
    }
}

class User
{
    use ShowUser
    {
        presentation as infos; // On donne l'alias infos à la méthode presentation
    }
}

$user = new User;
echo $user -> infos();
echo $user -> presentation();