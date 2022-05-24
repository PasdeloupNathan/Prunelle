
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(320) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `password` varchar(128) NULL,
  `roles` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(320) NOT NULL,
  `codeproduit` varchar(320) NOT NULL,
  `taille` varchar(128) NULL,
  `affichagenom`varchar(3) NOT NULL,
  `prix` float(5),
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `intervenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(320) NOT NULL,
  `nom` varchar(320) NOT NULL,
  `salaire` float(5),
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ecole` (
  `codeecole` int(11) NOT NULL,
  `datepdv` DATE NULL,
  `datepdvgrp` DATE NULL,
  `genre` varchar(20) NULL,
  `nomecole` varchar(50) NULL,
  `ville` varchar(50) NULL,
  `email` varchar(75) NULL,
  `adresse` varchar(100) NULL,
  `codepostal` int(6) NULL,
  `telephone` int(10) NULL,
  `direction` varchar(50) NULL,
  `nbreleve` int(5) NULL,
  PRIMARY KEY (`codeecole`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `PDV` (
  `codeecole` int(11) NOT NULL,
  `photographe1` varchar(50) NOT NULL,
  `photographe2` varchar(50) NOT NULL,
  `datepdv` DATE NOT NULL,
  `dureepdv` float(5) NOT NULL,
  `nomecole` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `frequence` varchar(75) NOT NULL,
  `nbreleve` int(5) NOT NULL,
  `nbrclasse` int(5) NOT NULL,
  `jdecharge` varchar(75)  NOT NULL,
  `typePDV` varchar(75) NOT NULL,
  `ambianceprof` varchar(75) NOT NULL,
  `bdd` varchar(75) NOT NULL,
  `groupeprenom` varchar(75) NOT NULL,
  `ideaclasse` varchar(75) NOT NULL,
  `theme`varchar(50) NOT NULL,
  `typevente` varchar(75) NOT NULL,
  `typeempochage` varchar(100) NOT NULL,
  `planchepocheteindiv` varchar(200) NOT NULL,
  `prixecolepocheteindiv` float(5) NOT NULL,
  `prixparentpocheteindiv` float(5) NOT NULL,
  `planchepochetefratrie` varchar(200) NOT NULL,
  `prixecolepochetefratrie` float(5) NOT NULL,
  `prixparentpochetefratrie` float(5) NOT NULL,
  `prixecoleplancheseule` float(5) NOT NULL,
  `prixparentplancheseule` float(5) NOT NULL,
  `compopochetegroupe` varchar(200) NOT NULL,
  `prixecolepochetegroupe` float(5) NOT NULL,
  `prixparentpochetegroupe` float(5) NOT NULL,
  `commentairepdv` varchar(400) NULL,
  PRIMARY KEY (`codeecole`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `OUTPOST` (
  `codeecole` int(11) NOT NULL, 
  `datejob` DATE NOT NULL,
  `nomecole` varchar(50) NOT NULL,
  `nomcreateurjob` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `typejob` varchar(75) NOT NULL,
  `commentaireoutpost` varchar(400) NULL,
  PRIMARY KEY (`codeecole`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `EMPOCHAGE` (
  `numlivraison` int(11) NOT NULL, 
  `codeecole` int(11) NOT NULL, 
  `nomempocheur` varchar(50) NOT NULL,
  `dateempochage` DATE NOT NULL,
  `nbrportecle` int(5) NULL,
  `typeempochage` varchar(75) NOT NULL,
  `tempempochage` float(5) NULL,
  `fptpe` varchar(100) NOT NULL,
  PRIMARY KEY (`numlivraison`)
)

CREATE TABLE `EMPOCHAGEHORAIRE` (
  `numlivraison` int(11) NOT NULL, 
  `dateempochage` DATE NOT NULL,
  `tempempochage` float(5) NOT NULL,
  PRIMARY KEY (`numlivraison`)
)

CREATE TABLE `LIVRAISON` (
  `numlivraison` int(11) NOT NULL, 
  `nomlivreur` varchar(50) NOT NULL,
  `d&l` varchar(8) NOT NULL,
  PRIMARY KEY (`numlivraison`)
)


-- CREATE TABLE `FACTURE` 