
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(320) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `password` varchar(128) NULL,
  `roles` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `ecole` (
  `CODEECOLE` int(11) NOT NULL,
  PRIMARY KEY (`CODEECOLE`)
)

CREATE TABLE `intervenant` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(320 NOT NULL,
)

CREATE TABLE `produit` (
  `ID` int(11) NOT NULL,

)

-- CREATE TABLE `PDV` (

-- )
-- CREATE TABLE `EMPOCHAGE` (

-- )
-- CREATE TABLE `OUTPOST` (

-- )
-- CREATE TABLE `LIVRAISON` (

-- )
-- CREATE TABLE `FACTURE` (

-- )
-- CREATE TABLE `PDV` (

-- )
-- CREATE TABLE `EMPOCHAGE` (

-- )
-- CREATE TABLE `OUTPOST` (

-- )
-- CREATE TABLE `LIVRAISON` (

-- )
-- CREATE TABLE `FACTURE` (

-- )