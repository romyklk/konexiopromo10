<?php
//Cette fonction permet d'inclure les classes de manière automatique 
function inclusionAutomatique($nomDeLaClasse)
{
    require_once($nomDeLaClasse . '.php');
}

// spl_autoload_register() est une fonction prédéfinie de PHP qui permet d'exécuter une fonction lorsque l'interpréteur voit passer le mot-clé "new". On lui passe en argument le nom d'une fonction.
spl_autoload_register('inclusionAutomatique');