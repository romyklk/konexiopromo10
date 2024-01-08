<?php 
/* 
Cast ou Transformation permet de convertir un type de données en un autre type de données.

stdClass est la classe standard de PHP et les objets de cette classe sont des objets orphelins, c'est-à-dire qu'ils n'héritent d'aucune autre classe.
*/

$tab = ["Pomme", "Poire", "Banane", "Orange"];

$monObj = (object) $tab; //object est le type de données vers lequel on veut convertir $tab

var_dump($monObj);

$users = [
        "firstname" => "John",
        "lastname" => "Doe",
        "age" => 25,
    ];

$userObj = (object) $users;

var_dump($userObj);
$userObj->firstname = "Jane";
$userObj->lastname = "Doe";
$userObj->age = 30;

var_dump($userObj);

$userObj->city = "Paris";
$userObj->country = "France";
$userObj->job = "Développeur";

var_dump($userObj);

$tabMulti = [
    "user1" => [
        "firstname" => "John",
        "lastname" => "Doe",
        "age" => 25,
    ],
    "user2" => [
        "firstname" => "Jane",
        "lastname" => "Doe",
        "age" => 30,
    ],
    "user3" => [
        "firstname" => "James",
        "lastname" => "Doe",
        "age" => 35,
    ],
];

$objMulti = (object) $tabMulti;

var_dump($objMulti);

var_dump($objMulti->user1["firstname"]);


$objMulti->user1["city"] = "Paris";

var_dump($objMulti);
