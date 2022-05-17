
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
  `nom` varchar(50) NULL,
  `ville` varchar(50) NULL,
  `email` varchar(75) NULL,
  `adresse` varchar(100) NULL,
  `codepostal` int(6) NULL,
  `telephone` int(10) NULL,
  `direction` varchar(50) NULL,
  `nbreleve` int(5) NULL,
  PRIMARY KEY (`CODEECOLE`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- CREATE TABLE `PDV` (

-- )
-- CREATE TABLE `EMPOCHAGE` (

-- )
-- CREATE TABLE `OUTPOST` (

-- )
-- CREATE TABLE `LIVRAISON` (

-- )
-- CREATE TABLE `FACTURE` 