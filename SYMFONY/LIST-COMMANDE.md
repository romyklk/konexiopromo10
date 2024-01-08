# Liste des commandes symfony

## Commandes de base

1. Créer un projet symfony monolithe(avec toutes les fonctionnalités activées)
    `symfony new nom_de_l_application --webapp`

2. Créer un projet symfony microservice(avec les fonctionnalités minimales)
    `symfony new nom_de_l_application`

3. Lancer notre application symfony
    `cd nom_de_l_application`
    `symfony serve` ou `symfony server:start`
    `symfony serve -d` ou `symfony server:start -d` pour lancer le serveur en arrière plan

4. Arrêter notre application symfony
   `symfony server:stop` ou `symfony serve:stop`

5. Pour ouvrir notre application symfony dans le navigateur
    `symfony open:local`

6. Pour vider le cache de notre application symfony
    `symfony console cache:clear`

7. Pour installer le certificat SSL
    `symfony server:ca:install`

## Creation de controller

1. Créer un controller
    `symfony console make:controller NomDuController`

