<?php
/* 
Namespace avec use.

On peut utiliser use pour importer une classe dans un namespace.
Pour cela il faut utiliser le chemin complet de la classe c'est à dire le namespace et le nom de la classe.

On peut aussi utiliser as pour renommer la classe importée.
*/
require_once 'Google/Login.php';
require_once 'Facebook/Login.php';
// 1ere solution
/* $google = new Google\Login();

$google->login();
echo '<br>';
$facebook = new Facebook\Login();

$facebook->login(); */

// 2eme solution
use Google\Login as GoogleLogin;
use Facebook\Login as FacebookLogin;


$google = new GoogleLogin();
$google->login();

echo '<br>';

$facebook = new FacebookLogin();
$facebook->login();