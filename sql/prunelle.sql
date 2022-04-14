-- Create a new database called 'DatabaseName'
-- Connect to the 'master' database to run this snippet
USE main
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'Prunelle'
)
CREATE DATABASE Prunelle
GO


CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(320) NOT NULL,
  `MAIL` varchar(320) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
)


CREATE TABLE `ecole` (
  `CODEECOLE` int(11) NOT NULL,

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