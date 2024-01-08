<?php 

require_once 'Utils/Logger.php';
require_once 'Math/Calculator.php';

use Utils\Logger;
use Math\Calculator;

$result = Calculator::add(1, 2);
Logger::log("Le résultat est $result");