<?php

class Database 
{
    private static $instance = null;
    private $pdo;

    private function __construct() 
    {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
$con = Database::getInstance()->getPdo();

var_dump($con);