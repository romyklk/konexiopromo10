<?php

class Logger 
{
    public function log($message)
    {
        echo $message;
    }
}

class UserSettings
{
    private $logger;

    // On injecte la dépendance dans le constructeur
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function register($username)
    {
        $this->logger->log("L'utilisateur $username a été enregistré");
    }

}
// Je crée une instance de la classe Logger
$logger = new Logger();

// Je passe l'instance de Logger à la classe UserSettings
$userSettings = new UserSettings($logger);

// J'appelle la méthode register de la classe UserSettings
$userSettings->register('John Doe');