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

2. Debuger un controller
    `symfony console debug:router`

3. Liste des routes qui matchent
    `symfony console debug:router /url` ou `symfony console debug:router  nom_de_la_route`

## TWIG

1. Quelques synthaxes de twig
    `{{ }}` pour afficher une variable
    `{% %}` pour faire une condition
    `{# #}` pour faire un commentaire

{{ variable }} ==> `Pour afficher une variable`
{{ tab['id'] }} ==> `Pour afficher le contenu du tableau à l'indexe id`

{{ obj.name }} ==> `Pour afficher le contenu du getteur de l'objet obj à l'attribut name`

{{ obj.name | upper }} ==> `Pour afficher le contenu du getteur de l'objet obj à l'attribut name en majuscule`

{{ obj.name | lower }} ==> `Pour afficher le contenu de l'objet obj à l'attribut name en minuscule`

{{ obj.name | capitalize }} ==> `Pour afficher le contenu de l'objet obj à l'attribut name avec la première lettre en majuscule`

{{ obj.name | length }} ==> `Pour afficher la taille du contenu de l'objet obj à l'attribut name`

{{ obj.name | slice(0, 3) }} ==> `Pour afficher les 3 premiers caractères du contenu de l'objet obj à l'attribut name`

{% set maVariable=10 %} ==> `Pour déclarer une variable`

{{ variable1 ~ variable2}} ==> `Pour la concaténation`

{% if maVariable > 10 %} ==> `Pour faire une condition`

{% elseif maVariable < 10 %} ==> `Pour faire une condition`

{% else %} ==> `Pour faire une condition`

{% endif %} ==> `Pour faire une condition`

{% for i in 0..10 %} ==> `Pour faire une boucle`

{% endfor %} ==> `Pour faire une boucle`

{% block nom_du_block %} ==> `Pour définir un block`

{% endblock %} ==> `Pour définir un block`

{% extends 'nom_du_template.html.twig' %} ==> `Pour hériter d'un template`

{% inclue 'nom_du_template.html.twig' %} ==> `Pour inclure un template`