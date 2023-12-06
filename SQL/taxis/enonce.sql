conducteur 
+---------------+----------+-----------+
| id_conducteur | prenom   | nom       |
+---------------+----------+-----------+
|             1 | Julien   | Avigny    |
|             2 | Morgane  | Alamia    |
|             3 | Philippe | Pandre    |
|             4 | Amelie   | Blondelle |
|             5 | Alex     | Richy     |
+---------------+----------+-----------+

CREATE TABLE `taxis`.`conducteur` (`id_conducteur` INT NOT NULL AUTO_INCREMENT , `prenom` VARCHAR(100) NOT NULL , `nom` VARCHAR(50) NOT NULL , PRIMARY KEY (`id_conducteur`)) ENGINE = InnoDB;

vehicule
+-------------+---------------------+---------+---------+-----------------+
| id_vehicule | marque		   		| modele  | couleur | immatriculation |
+-------------+---------------------+---------+---------+-----------------+
|         501 | Peugeot             | 807     | noir    | AB-355-CA       |
|         502 | Citroen             | C8      | bleu    | CE-122-AE       |
|         503 | Mercedes            | Cls     | vert    | FG-953-HI       |
|         504 | Volkswagen          | Touran  | noir    | SO-322-NV       |
|         505 | Skoda               | Octavia | gris    | PB-631-TK       |
|         506 | Volkswagen          | Passat  | gris    | XN-973-MM       |
+-------------+---------------------+---------+---------+-----------------+

CREATE TABLE `taxis`.`vehicule` (`id_vehicule` INT NOT NULL AUTO_INCREMENT , `marque` VARCHAR(100) NOT NULL , `modele` VARCHAR(50) NOT NULL , `couleur` VARCHAR(20) NOT NULL , `immatriculation` VARCHAR(20) NOT NULL , PRIMARY KEY (`id_vehicule`)) ENGINE = InnoDB;


association_vehicule_conducteur
+----------------+-------------+---------------+
| id_association | id_vehicule | id_conducteur |
+----------------+-------------+---------------+
|              1 |         501 |             1 |
|              2 |         502 |             2 |
|              3 |         503 |             3 |
|              4 |         504 |             4 |
|              5 |         501 |             3 |
+----------------+-------------+---------------+

ALTER TABLE `association_vehicule_conducteur` ADD FOREIGN KEY (`id_conducteur`) REFERENCES `conducteur`(`id_conducteur`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `association_vehicule_conducteur` ADD FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule`(`id_vehicule`) ON DELETE SET NULL ON UPDATE CASCADE;

-------------------------------------------------------------------------------------------------------------- A- Réaliser les contraintes de clé étrangère---------------
-------------------------------------------------------------------------------------

Consignes : En utilisant le schema ci-dessus, créer les tables et les contraintes de clé étrangère.

Exercice 1
Pour éviter les erreurs, la société de taxis aimerait que l’on ne puisse pas faire une mauvaise association lors de la saisie.
Exemple : conducteur 58 avec le véhicule 900 (car ils n’existent pas).
Faites le test.

Exercice 2
La société de taxis peut modifier leurs conducteurs via leur logiciel, lorsqu’un conducteur est modifié (dans la table conducteur - changement d’id par exemple), la société aimerait que la modification soit répercutée dans la table « association_vehicule_conducteur ». 
Faites le test.

Exercice 3
La société de taxis peut supprimer des conducteurs via leur logiciel, ils aimeraient bloquer la possibilité de supprimer un conducteur (dans la table conducteur) tant que celui-ci conduit un véhicule.
Faites le test.

Exercice 4
La société de taxis peut modifier un véhicule via leur logiciel. Lorsqu’un véhicule est modifié (dans la table véhicule - changement d’id par exemple), la société aimerait que la modification soit répercutée dans la table « association_vehicule_conducteur ». 
Faites le test.

Exercice 5
Si un véhicule est supprimé alors qu’un ou plusieurs conducteurs le conduisaient, la société aimerait garder la présence de ces conducteurs dans la table « association_vehicule_conducteur » en précisant « null » comme valeur dans le champ correspondant puisque le véhicule aura été supprimé.
Faites le test.

-------------------------------------------------------------------------------------------------------------- B - Les reqêtes  --------------------
-------------------------------------------------------------------------------------

Qui conduit la voiture 503 ?

SELECT c.prenom 
FROM conducteur c
INNER JOIN association_vehicule_conducteur a 
ON c.id_conducteur = a.id_conducteur
WHERE a.id_vehicule = 503;

-- +----------+
-- | prenom   |
-- +----------+
-- | Philippe |
-- +----------+

Qui conduit quoi ?

SELECT vehicule.modele, conducteur.prenom
FROM vehicule, association_vehicule_conducteur, conducteur
WHERE vehicule.id_vehicule = association_vehicule_conducteur.id_vehicule
AND conducteur.id_conducteur = association_vehicule_conducteur.id_conducteur;

OU

SELECT v.modele, c.prenom
FROM  conducteur c
INNER JOIN association_vehicule_conducteur a
ON c.id_conducteur = a.id_conducteur
INNER JOIN vehicule v
ON v.id_vehicule = a.id_vehicule;

-- +--------+----------+
-- | modele | prenom   |
-- +--------+----------+
-- | 807    | Julien   |
-- | C8     | Morgane  |
-- | Cls    | Philippe |
-- | Touran | Amelie   |
-- | 807    | Philippe |
-- +--------+----------+

Ajoutez vous dans la liste des conducteurs.

INSERT INTO conducteur (prenom, nom) VALUES ('Xavier', 'Dupont');


Afficher tous les conducteurs (meme ceux qui n'ont pas de correspondance) ainsi que les vehicules
SELECT v.modele, c.prenom
FROM vehicule v
LEFT JOIN association_vehicule_conducteur a
ON v.id_vehicule = a.id_vehicule
RIGHT JOIN conducteur c
ON c.id_conducteur = a.id_conducteur;  


SELECT v.modele, c.prenom
FROM vehicule v
LEFT JOIN association_vehicule_conducteur a
ON v.id_vehicule = a.id_vehicule
LEFT JOIN conducteur c
ON c.id_conducteur = a.id_conducteur;


-- +--------+----------+
-- | modele | prenom   |
-- +--------+----------+
-- | 807    | Julien   |
-- | C8     | Morgane  |
-- | Cls    | Philippe |
-- | 807    | Philippe |
-- | Touran | Amelie   |
-- | NULL   | Xavier   |
-- | Passat | NULL     |
-- +--------+----------+

Ajoutez un nouvel enregistrement dans la table des véhicules.



Afficher les conducteurs et tous les vehicules (meme ceux qui n'ont pas de correspondance)

-- +---------+----------+
-- | modele  | prenom   |
-- +---------+----------+
-- | 807     | Julien   |
-- | 807     | Philippe |
-- | C8      | Morgane  |
-- | Cls     | Philippe |
-- | Touran  | Amelie   |
-- | Octavia | NULL     |
-- +---------+----------+

Afficher tous les conducteurs et tous les vehicules, peut importe les correspondances

-- +---------+----------+
-- | modele  | prenom   |
-- +---------+----------+
-- | 807     | Julien   |
-- | C8      | Morgane  |
-- | Cls     | Philippe |
-- | 807     | Philippe |
-- | Touran  | Amelie   |
-- | NULL    | Alex     |
-- | Octavia | NULL     |
-- +---------+----------+

