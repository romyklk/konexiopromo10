<?php

class A 
{
    public function direBonjour()
    {
        return 'Bonjour tout le monde !';
    }

}

class B 
{
    public $maVariable;
    public function __construct()
    {
        // Je crée dans la propriété maVariable un objet de la classe A. A partir de ce moment, cette propriété contient un objet de la classe A.Je peux donc appeler la méthode direBonjour() de la classe A à partir de la classe B sans avoir besoin d'hériter de la classe A.
        $this->maVariable = new A;
    }

    public function autreMethod()
    {
        return $this->maVariable->direBonjour();
    }
}

$b = new B;
echo $b->autreMethod();