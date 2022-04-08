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

)


CREATE TABLE `ecole` (

)

CREATE TABLE `intervenant` (

)

CREATE TABLE `produit` (
    
)

