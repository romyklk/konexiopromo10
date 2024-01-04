<?php

class A 
{
    public function testA()
    {
        echo 'test de A <br>';
    }
}


class B extends A
{
    public function testB()
    {
        echo 'test de B <br>';
    }
}

class C extends B
{
    public function testC()
    {
        echo 'test de C <br>';
    }
}

$c = new C;
$c->testA();
$c->testB();
$c->testC();

/*
-- TRANSITIVITE: si la classe C hérite de la classe B et que la classe B hérite de la classe A, alors la classe C hérite de la classe A.

-- NON REFLEXIVITE: une classe ne peut pas hériter d'elle-même.(ex: class A extends A)

-- NON SYMETRIQUE: si la classe B hérite de la classe A, alors la classe A ne peut pas hériter de la classe B.(ex: class B extends A et class A extends B)

-- NON MULTIPLE: une classe ne peut pas hériter de plusieurs classes en même temps.(ex: class A extends B, C)

-- NON CYCLIQUE: si la classe A hérite de la classe B, alors la classe B ne peut pas hériter de la classe A.(ex: class A extends B et class B extends A)
*/