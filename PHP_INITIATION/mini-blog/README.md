# MINI BLOG PHP PROCEDURAL

## Description

Dans ce mini projet, nous allons créer un mini blog en PHP procédural. Nous allons utiliser une base de données MySQL pour stocker les articles, les catégories et les commentaires et les utilisateurs.

## Installation
- Php 7.4 ou plus
- MySQL 5.7 ou plus
- Apache 2.4 ou plus

## Les fonctionnalités

- Ajout d'un article
- Affichage de tous les articles
- Modification d'un article
- Suppression d'un article



## Les tables de la base de données(mini_blog)
- article
  - id_article(int pk auto_increment not null)
  - titre(varchar(255) not null)
  - contenu(text not null)
  - photo(varchar(255) not null)
  - date_creation(datetime not null)


`CREATE TABLE `mini_blog`.`article` (`id_article` INT NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL , `contenu` TEXT NOT NULL , `photo` VARCHAR(255) NOT NULL , `date_creation` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id_article`)) ENGINE = InnoDB;`

- categorie
  - id_categorie(int pk auto_increment not null)
  - nom(varchar(min 3 max 20) not null) pas de caractères spéciaux
  - date_creation(datetime not null)

`CREATE TABLE `mini_blog`.`categorie` (`id_categorie` INT NOT NULL AUTO_INCREMENT , `nom_categorie` VARCHAR(20) NOT NULL , `date_creation` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id_categorie`)) ENGINE = InnoDB;`
