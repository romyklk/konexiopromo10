-- SQLBook: Code
----------------------FONCTIONS PREDEFINIES----------------------*/

-- Une fonction prédefinie est une fonction qui est déjà définie dans le langage

SELECT DATABASE(); -- Permet de savoir sur quelle base de données on est actuellement

SELECT VERSION(); -- Permet de savoir quelle version de MySQL on utilise
INSERT INTO `employes`(`id_employes`, `prenom`, `nom`, `sexe`, `service`, `date_embauche`, `salaire`) VALUES ('DUPOUX', 'Jean', 'Paul', 'm', 'informatique', '2018-02-20', '2000');
SELECT LAST_INSERT_ID(); -- Permet de récupérer le dernier ID inséré dans la base de données

-- DATE_ADD() permet d'ajouter un intervalle de temps à une date

SELECT DATE_ADD(CURDATE(), INTERVAL 31 DAY); -- Permet d'ajouter 31 jours à la date du jour