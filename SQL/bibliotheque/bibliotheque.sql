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