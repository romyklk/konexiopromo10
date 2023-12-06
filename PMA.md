# Présentation de l'interface PMA(PhpMyAdmin)

Afin de pouvoir gérer la base de données, nous avons utilisé l'interface PMA(phpMyAdmin). Celle-ci permet de gérer nos bases de données. Elle permet de créer des bases de données, des tables, des colonnes, des index, des clés étrangères, des utilisateurs, etc. Elle permet aussi d'exécuter des requêtes SQL. 
## Connexion à l'interface PMA

Pour se connecter à l'interface PMA, il faut se rendre sur la page suivante : 
`http://localhost/phpmyadmin/` Sur windows
`http://localhost:8888/phpmyadmin/` sur MAC

Sur la page de connexion, il faut entrer le nom d'utilisateur et le mot de passe. Ensuite, il faut cliquer sur le bouton "Go".
Sur MAC, le nom d'utilisateur est `root` et le mot de passe est `root`. Sur Windows, le nom d'utilisateur est `root` et le mot de passe est vide.

## Présentation de l'interface PMA

- A gauche, on retrouve la liste des bases de données.
- En haut, on retrouve le menu de navigation.
- A droite, on retrouve les informations sur la version de PMA, de PHP et de MySQL.
- En bas, on retrouve la console SQL.

## Dans le menu de navigation

- Base de données : permet de créer une nouvelle base de données ou d'en sélectionner une.
- `SQL` : permet d'exécuter une requête SQL.
- `Etat` : permet d'avoir des informations sur le serveur MySQL.
- `Compte` utilisateur : permet de gérer les comptes utilisateurs.
- `Exporter` : permet d'exporter une base de données.
- `Importer` : permet d'importer une base de données.
- `Paramètres` : permet de modifier les paramètres de PMA.
- `Replication` : permet de gérer la réplication des bases de données. Cela permet de créer une copie de la base de données sur un autre serveur MySQL.
- `Variables` : permet de modifier les variables du serveur MySQL.
- `Jeu de caractères` : permet de modifier le jeu de caractères du serveur MySQL.C'est-à-dire, l'encodage des caractères.
- `Moteur` : Permet de voir les moteurs de stockage disponibles.
- `Extensions` : Permet de voir les extensions disponibles.C'est-à-dire, les extensions qui peuvent être utilisées par le serveur MySQL.


## Compte utilisateur

Pour créer un compte utilisateur, il faut cliquer sur le bouton "Ajouter un compte utilisateur". Ensuite, il faut entrer le nom de l'utilisateur, le nom de l'hôte, le mot de passe et la confirmation du mot de passe. Enfin, il faut cliquer sur le bouton "Exécuter".

Nous pouvons donner différents droits à un utilisateur. Voici les droits disponibles :

- Privilèges globaux : permet d'avoir tous les droits. C'est-à-dire, tous les droits sur toutes les bases de données.

- Privilèges sur la base de données : permet d'avoir tous les droits sur une base de données.

- Données : permet d'avoir tous les droits sur les données d'une base de données.
- Structure : permet d'avoir tous les droits sur la structure d'une base de données.
- Administration : permet d'avoir tous les droits sur l'administration d'une base de données.Nous avons plusieurs droits disponibles :
    * `GRANT`: permet d'accorder des privilèges à d'autres utilisateurs.
    * `SUPER`: permet d'utiliser des commandes comme KILL, PURGE BINARY LOGS, SET GLOBAL, CHANGE  MASTER TO, etc.
    * `PROCESS`: permet d'afficher les processus des autres utilisateurs.
    * `RELOAD`: permet d'utiliser les commandes FLUSH.
    * `SHUTDOWN`: permet d'utiliser la commande SHUTDOWN.
    * `SHOW DATABASES`: permet d'afficher les bases de données.
    * `LOCK TABLES`: permet de verrouiller les tables pour une session.
    * `REPLICATION CLIENT`: permet d'utiliser les commandes SHOW MASTER STATUS, SHOW SLAVE STATUS, SHOW BINARY LOGS, etc.
    * `REFERENCES`: permet d'avoir des privilèges sur les clés étrangères.
    * `REPLICATION SLAVE`: permet d'utiliser les commandes CHANGE MASTER TO, etc.
    * `CREATE USER`: permet de créer des utilisateurs.


## Création d'une base de données

Pour créer une base de données, il faut cliquer sur le bouton "Créer une base de données". Ensuite, il faut entrer le nom de la base de données et choisir l'encodage des caractères. Enfin, il faut cliquer sur le bouton "Créer".

`L'encodage des caractères`: Permet de définir l'encodage des caractères. C'est-à-dire, le jeu de caractères. Par exemple, le jeu de caractères `latin1` permet d'utiliser les caractères latins. Le jeu de caractères `utf8` permet d'utiliser les caractères latins et les caractères spéciaux. Le jeu de caractères `utf8mb4` permet d'utiliser les caractères latins, les caractères spéciaux et les émojis.Il est conseillé d'utiliser le jeu de caractères `utf8mb4`.

- Il y a plusieurs type de `utf8mb4`:
    * `utf8mb4_unicode_520_ci`: permet de comparer les caractères en ignorant les accents et en utilisant les règles de Unicode 5.20.
    * `utf8mb4_bin`: permet de comparer les caractères en prenant en compte les accents.
    * `utf8mb4_general_ci`: permet de comparer les caractères en ignorant les accents.C'est-à-dire, c'est la même chose que `utf8mb4_unicode_ci`.

## Création d'une table

Pour créer une table, il faut cliquer sur le bouton "Créer une table". Ensuite, il faut entrer le nom de la table et le nombre de colonnes. Enfin, il faut cliquer sur le bouton "Continuer".

## Création d'une colonne

Pour créer une colonne, il faut entrer : 
`nom de la colonne` : permet d'entrer le nom de la colonne.
`type de la colonne` : permet de choisir le type de la colonne.
`taille de la colonne` : permet de choisir la taille de la colonne.
`valeur par défaut` : permet de choisir la valeur par défaut de la colonne.
`ìnterclassement` : permet de choisir l'interclassement de la colonne.
`attributs` : permet de choisir les attributs de la colonne.
`null` : permet de choisir si la colonne peut être vide ou non.
`ìndex` : permet de choisir si la colonne est un index ou non.C'est-à-dire, si la colonne est utilisée pour rechercher des données.
`A_I` : permet de choisir si la colonne est auto-incrémentée ou non.C'est-à-dire, si la colonne s'incrémente automatiquement.
`commentaire` : permet d'entrer un commentaire sur la colonne.
`virtualité` : permet de choisir si la colonne est virtuelle ou non.C'est-à-dire, si la colonne est calculée ou non.

## Types de colonnes

- `INT` : permet de stocker un nombre entier.
- `VARCHAR` : permet de stocker une chaîne de caractères.
- `TEXT` : permet de stocker une chaîne de caractères de taille illimitée.
- `DATE` : permet de stocker une date.
- `DATETIME` : permet de stocker une date et une heure.
- `TIMESTAMP` : permet de stocker une date et une heure.
- `TIME` : permet de stocker une heure.
- `FLOAT` : permet de stocker un nombre décimal.
- `DOUBLE` : permet de stocker un nombre décimal.
- `DECIMAL` : permet de stocker un nombre décimal.
- `ENUM` : permet de stocker une liste de valeurs.
- `SET` : permet de stocker une liste de valeurs.
- `TINYINT` : permet de stocker un nombre entier.
- `SMALLINT` : permet de stocker un nombre entier.
- `MEDIUMINT` : permet de stocker un nombre entier.
- `BIGINT` : permet de stocker un nombre entier.
- `BINARY` : permet de stocker une chaîne de caractères.
- `VARBINARY` : permet de stocker une chaîne de caractères.
- `BIT` : permet de stocker une chaîne de caractères.

## Tailles de colonnes

- Pour les types de colonnes `VARCHAR` il est obligatoire de choisir une taille. Pour les autres types de colonnes, il est facultatif de choisir une taille. La longueur maximale est de 255 caractères.

- Pour les types de colonnes `INT` il n'est pas obligatoire de choisir une taille.

- Pour le type `TEXT` il n'est pas obligatoire de choisir une taille. La longueur maximale est de 65535 caractères.

## Attributs de colonnes

- `UNSIGNED` : permet de stocker des nombres positifs.
- `ZEROFILL` : permet de remplir les nombres avec des zéros.
- `BINARY` : permet de stocker des chaînes de caractères binaires.
- `UNSIGNED ZEROFILL` : permet de stocker des nombres positifs et de remplir les nombres avec des zéros.
- `on update CURRENT_TIMESTAMP` : permet de mettre à jour la colonne avec la date et l'heure actuelle.

## Index

- `PRIMARY` : permet de définir la colonne comme clé primaire.
- `UNIQUE` : permet de définir la colonne comme clé unique.C'est-à-dire, il ne peut pas y avoir deux fois la même valeur dans la colonne.
- `INDEX` : permet de définir la colonne comme index.C'est-à-dire, la colonne est utilisée pour rechercher des données.
- `FULLTEXT` : permet de définir la colonne comme index.C'est-à-dire, la colonne est utilisée pour rechercher des données.
- `SPATIAL` : permet de définir la colonne comme index.C'est-à-dire, la colonne est utilisée pour rechercher des données.

La différence entre `INDEX` et `UNIQUE` est que `UNIQUE` ne peut pas y avoir deux fois la même valeur dans la colonne. Alors que `INDEX` peut y avoir deux fois la même valeur dans la colonne.Pour les clés étranères, il faut utiliser `INDEX` car il peut y avoir deux fois la même valeur dans la colonne.


## Les moteurs de stockage

- `MyISAM` : permet de stocker les données dans des fichiers.Elle est rapide mais elle ne supporte pas les transactions et les clés étrangères. Elle est utilisée pour les applications qui ne nécessitent pas de transactions et de clés étrangères.

- `InnoDB` : permet de stocker les données dans des fichiers.Elle est plus lente que MyISAM mais elle supporte les transactions et les clés étrangères. Elle est utilisée pour les applications qui nécessitent des transactions et des clés étrangères.

- `MEMORY` : permet de stocker les données en mémoire.Elle est très rapide mais elle ne supporte pas les transactions et les clés étrangères. Les données sont perdues en cas de redémarrage du serveur MySQL. 

- `CSV` : permet de stocker les données dans des fichiers CSV.Elle est très lente mais elle supporte les transactions et les clés étrangères. Elle est utilisée pour les applications qui nécessitent des transactions et des clés étrangères.

- `ARCHIVE` : permet de stocker les données dans des fichiers.Elle est très rapide mais elle ne supporte pas les transactions et les clés étrangères. Elle est utilisée pour les applications qui ne nécessitent pas de transactions et de clés étrangères.
