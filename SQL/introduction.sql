-- SQLBook: Code
-- Pour accéder à la console mysql sur MAC(WAMP) : /Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot

-- Pour accéder à la console mysql sur windows(WAMP) : C:\wamp\bin\mysql\mysql5.6.17\bin\mysql.exe -uroot -proot OU Cliquer sur l'icone WAMP en bas à droite, puis MySQL, puis MySQL console

-- Pour accéder à la console mysql sur windows(XAMPP) : C:\xampp\mysql\bin\mysql.exe -uroot -proot OU Cliquer sur l'icone XAMPP en bas à droite, puis MySQL, puis MySQL console

-- Pour apprndre SQL (doc : https://sql.sh/)
-- ####### LES COMMANDES DE BASE ####### --

-- Pour voir la version de MySQL :
SHOW VARIABLES LIKE "%version%";

-- Pour voir le port de MySQL :
SHOW VARIABLES LIKE "%port%";

-- Afficher la liste des bases de données :
SHOW DATABASES;

-- Créer une base de données :

CREATE DATABASE  if not exists `nom_de_la_base`;
-- Exemple : CREATE DATABASE  if not exists entreprise;

-- Supprimer une base de données :
DROP DATABASE `nom_de_la_base`;
-- Exemple : DROP DATABASE entreprise;

-- Utiliser une base de données :
USE `nom_de_la_base`;
-- Exemple : USE entreprise;

-- Creation d'une table :

CREATE TABLE `nom_de_la_table` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(50) NOT NULL,
    `prenom` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE employes (
  id_employes INT NOT NULL AUTO_INCREMENT,
  prenom VARCHAR(20) NOT NULL,
  nom VARCHAR(20) NOT NULL,
  sexe ENUM('m','f') NOT NULL,
  service VARCHAR(30) NOT NULL,
  date_embauche DATE NOT NULL,
  salaire INT NOT NULL,
  PRIMARY KEY (id_employes)
) ENGINE=InnoDB ;

INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES
(350, 'Jean-pierre', 'Laborde', 'm', 'direction', '2010-12-09', 5000),
(388, 'Clement', 'Gallet', 'm', 'commercial', '2010-12-15', 2300),
(415, 'Thomas', 'Winter', 'm', 'commercial', '2011-05-03', 3550),
(417, 'Chloe', 'Dubar', 'f', 'production', '2011-09-05', 1900),
(491, 'Elodie', 'Fellier', 'f', 'secretariat', '2011-11-22', 1600),
(509, 'Fabrice', 'Grand', 'm', 'comptabilite', '2011-12-30', 2900),
(547, 'Melanie', 'Collier', 'f', 'commercial', '2012-01-08', 3100),
(592, 'Laura', 'Blanchet', 'f', 'direction', '2012-05-09', 4500),
(627, 'Guillaume', 'Miller', 'm', 'commercial', '2012-07-02', 1900),
(655, 'Celine', 'Perrin', 'f', 'commercial', '2012-09-10', 2700),
(699, 'Julien', 'Cottet', 'm', 'secretariat', '2013-01-05', 1390),
(701, 'Mathieu', 'Vignal', 'm', 'informatique', '2013-04-03', 2500),
(739, 'Thierry', 'Desprez', 'm', 'secretariat', '2013-07-17', 1500),
(780, 'Amandine', 'Thoyer', 'f', 'communication', '2014-01-23', 2100),
(802, 'Damien', 'Durand', 'm', 'informatique', '2014-07-05', 2250),
(854, 'Daniel', 'Chevel', 'm', 'informatique', '2015-09-28', 3100),
(876, 'Nathalie', 'Martin', 'f', 'juridique', '2016-01-12', 3550),
(900, 'Benoit', 'Lagarde', 'm', 'production', '2016-06-03', 2550),
(933, 'Emilie', 'Sennard', 'f', 'commercial', '2017-01-11', 1800),
(990, 'Stephanie', 'Lafaye', 'f', 'assistant', '2017-03-01', 1775);

-- ##### REQUETES SQL ###### --

-- #### SELECT #### --

SELECT Permet de selectionner des données dans une table. 

Sa syntaxe est la suivante :
    SELECT `les_champs` FROM `nom_de_la_table`;

-- Récupétation de toutes les informations de la table employes :
SELECT id_employes, prenom, nom, sexe, service, date_embauche, salaire FROM employes;

SELECT * FROM employes; -- * Signifie(ALL) tout selectionner

-- Afficher le nom et le prénom de tous les employés :

SELECT prenom, nom FROM employes;

-- Afficher les différents services de l'entreprise :
SELECT service FROM employes;

-- Afficher les différents services de l'entreprise sans doublons :
SELECT DISTINCT service FROM employes;
-- DISTINCT permet de supprimer les doublons


-- ### WHERE ### --

-- WHERE permet de mettre une condition sur une requête SELECT

-- Sa syntaxe est la suivante :
    SELECT `les_champs` FROM `nom_de_la_table` WHERE `condition`;

-- Afficher les employés qui travaillent dans le service informatique :
SELECT * FROM employes WHERE service = 'informatique';
SELECT nom, prenom, service FROM employes WHERE service = 'informatique';

-- ## BETWEEN .... AND... ## --

-- BETWEEN permet de selectionner une plage de valeurs entre deux bornes

-- Sa syntaxe est la suivante :
    SELECT `les_champs` FROM `nom_de_la_table` WHERE `champ` BETWEEN `borne1` AND `borne2`;

`CURDATE()` : Fonction qui retourne la date du jour

-- Afficher les employés qui ont été embauchés entre le 01/01/2015 et aujourd'hui :

SELECT * FROM employes WHERE date_embauche BETWEEN '2015-01-01' AND CURDATE();

-- ### LIKE valeur approchante ### --

-- LIKE permet de selectionner des enrégistrements une valeur qui commence ou qui se termine ou qui contient un motif précis
-- On utilise le caractère % pour remplacer un ou plusieurs caractères

-- Sa syntaxe est la suivante :
    SELECT `les_champs` FROM `nom_de_la_table` WHERE `champ` LIKE `motif`;

-- Afficher les employés dont leprénom commence par la lettre 'S' :

-- Afficher les employés dont le prénom se termine par la lettre 'e' :

-- Afficher les employés dont le prénom contient la lettre 'a' :