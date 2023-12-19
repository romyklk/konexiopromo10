<?php

// Fonction qui gère l'affichage des erreurs
function generateErrorMessage($errors)
{
    if (!empty($errors)) {
        $errorMessage = '<div class="alert alert-warning alert-dismissible fade show w-75 mx-auto" role="alert">' .
            '<strong>Alert!</strong> ';

        foreach ($errors as $err) {
            $errorMessage .= $err . '<br>';
        }

        $errorMessage .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
            '</div>';

        echo $errorMessage;
    } else {
        echo '';
    }
}


// Fonction qui vérifie si l'utilisateur est connecté

function userConnected()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

// Fonction qui vérifie si l'utilisateur est connecté et si son rôle est admin

function userIsAdmin()
{
    if (userConnected() && $_SESSION['user']['statut'] == 1) {
        return true;
    } else {
        return false;
    }
}