<?php
/* 
Une interface est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes qui vont l'implémenter vont posséder les mêmes méthodes avec la même signature.

Une interface n'est pas instanciable.

Une interface peut contenir des constantes et des méthodes abstraites (sans contenu).

Une interface définit un contrat que les classes qui vont l'implémenter devront respecter.

Pour créer une interface, il faur réfléchir en terme de comportement : qu'est-ce que ma classe doit faire ? 

Une interface peut être implémentée par plusieurs interfaces.

Pour implémenter une interface, on utilise le mot clé implements.

Une classe peut implémenter plusieurs interfaces.

Pour créer une interface, on utilise le mot clé interface.
*/

// Déclaration de l'interface Mouvement
interface Mouvement
{   // Méthode abstraite de l'interface Mouvement
    public function deplacement();
}

// Une classe ne peut pas hériter d'une interface.
//class Bateau extends Mouvement{}

// Une classe implémente une interface.

class Avion implements Mouvement
{
    public function deplacement()
    {
        return 'Je vole';
    }
}

// Une interface peut hériter d'une interface.

interface Volant extends Mouvement
{
    public function atterrissage();
}
// Si une classe implémente une interface qui hérite d'une autre interface, elle doit obligatoirement implémenter toutes les méthodes de l'interface mère et de l'interface fille.
class Avion2 implements Volant
{
    public function deplacement()
    {
        return 'Je vole';
    }

    public function atterrissage()
    {
        return 'J\'atterris';
    }
}

// Une classe peut implémenter plusieurs interfaces.

interface Navigant
{
    public function embarquement();
}

interface Vole 
{
    public function numeroVol();
}

class Avion3 implements Navigant, Vole
{
    public function embarquement()
    {
        return 'J\'embarque';
    }

    public function numeroVol()
    {
        return 'Mon numéro de vol est le 123';
    }
}

// Une interface peut hériter de plusieurs interfaces.

interface iA 
{
    public function a();
}

interface iB 
{
    public function b();
}

interface iC extends iA, iB
{
    public function c();
}

class D implements iC
{
    public function a()
    {
        return 'Je suis la méthode a';
    }

    public function b()
    {
        return 'Je suis la méthode b';
    }

    public function c()
    {
        return 'Je suis la méthode c';
    }
}

// Une classe peut hériter d'une autre classe et implémenter une ou plusieurs interfaces.

class E extends D implements Mouvement,Navigant
{
    public function deplacement()
    {
        return 'Je me déplace dans la classe E';
    }

    public function embarquement()
    {
        return 'J\'embarque dans la classe E';
    }
}