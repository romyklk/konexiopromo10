# Architecture MVC

L'architecture MVC est une architecture logicielle destinée aux interfaces graphiques lancée en 1978 et très populaire pour les applications web. Elle est basée sur la séparation du code en trois parties distinctes : `le modèle`, `la vue` et `le contrôleur`.

## Modèle

Le modèle contient les données et les méthodes de manipulation de ces données. Il est indépendant de l'interface graphique.
C'est le modèle qui est responsable de l'accès aux données, de leur intégrité et de leur validation.

## Vue

La vue est l'interface graphique. Elle est responsable de l'affichage des données contenues dans le modèle et de la réception des actions de l'utilisateur.

## Contrôleur

Le contrôleur est responsable de la gestion des événements de l'interface graphique. Il reçoit les actions de l'utilisateur et les traite. Il peut alors demander au modèle de changer ses données et demander à la vue de se mettre à jour.
C'est le point central de l'application. Il est responsable de la synchronisation entre le modèle et la vue.

## Avantages su modèle MVC

- La séparation du code en trois parties distinctes permet de mieux organiser le code et de le rendre plus lisible.
- Permet le travail en équipe. Chaque développeur peut travailler sur une partie différente de l'application.
- Permet de changer facilement l'interface graphique sans toucher au modèle et au contrôleur.
- Permet d'avoir un code réutilisable. 

## Inconvénients du modèle MVC

- L'architecture MVC est plus complexe à mettre en place que d'autres architectures.
- L'architecture MVC est plus lourde que d'autres architectures.
- L'architecture MVC est plus lente que l'appel direct aux données.

## Exemple d'application MVC

- Project 
  - Controller/
    - UserController.php(Contrôleur de l'utilisateur)
    - ProductController.php(Contrôleur du produit)
    - HomeController.php(Contrôleur de la page d'accueil)
  - Model/
    - User.php(Modèle de l'utilisateur)
    - Product.php(Modèle du produit)
  - View/
    - User
      - index.php(Vue de la liste des utilisateurs)
      - show.php(Vue d'un utilisateur)
    - Product
      - show.php(Vue d'un produit)
      - add.php(Vue d'ajout d'un produit)
    - Home
      - index.php(Vue de la page d'accueil)
  - public/
    - index.php(Point d'entrée de l'application)
    - /css
    - /js