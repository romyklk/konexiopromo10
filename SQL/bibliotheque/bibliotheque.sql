-- SQLBook: Code
CREATE DATABASE if not exist biblioteque;

USE biblioteque;

CREATE TABLE abonne(
    id_abonne int NOT NULL AUTO_INCREMENT,
    prenom varchar(50) NOT NULL,
    PRIMARY KEY (id_abonne)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO abonne (prenom) VALUES 
('Guillaume'),
('Benoit'),
('Chloe'),
('Laura');


CREATE TABLE livre(
    id_livre int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    auteur varchar(50) NOT NULL,
    titre varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO livre(id_livre,auteur,titre) VALUES 
(100, 'GUY DE MAUPASSANT', 'Une vie'),
(101, 'GUY DE MAUPASSANT', 'Bel-Ami'),
(102, 'HONORE DE BALZAC', 'Le père Goriot'),
(103, 'ALPHONE DAUDET', 'Le petit chose'),
(104, 'ALEXANDRE DUMAS', 'La Reine Margot'),
(105, 'ALEXANDRE DUMAS', 'Les Trois Mousquetaires');


CREATE TABLE emprunt(
    id_emprunt int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_abonne int DEFAULT NULL,
    id_livre int DEFAULT NULL,
    date_sortie date NOT NULL,
    date_rendu date DEFAULT NULL,
    FOREIGN KEY (id_abonne) REFERENCES abonne(id_abonne),
    FOREIGN KEY (id_livre) REFERENCES livre(id_livre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO emprunt (id_emprunt, id_livre, id_abonne, date_sortie, date_rendu) VALUES
(1, 100, 1, '2016-12-07', '2016-12-11'),
(2, 101, 2, '2016-12-07', '2016-12-18'),
(3, 100, 3, '2016-12-11', '2016-12-19'),
(4, 103, 4, '2016-12-12', '2016-12-22'),
(5, 104, 1, '2016-12-15', '2016-12-30'),
(6, 105, 2, '2017-01-02', '2017-01-15'),
(7, 105, 3, '2017-02-15', NULL),
(8, 100, 2, '2017-02-20', NULL);
