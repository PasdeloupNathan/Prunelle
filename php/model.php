<?php 
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'prunelle';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}


// CREATION PRODUIT //

function produitAdd($affichagenom,$nom,$codeproduit,$taille) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `produit` (`id`,`affichagenom`, `nom`, `codeproduit`, `taille`, `prix`) VALUES (NULL, '$affichagenom', '$nom', '$codeproduit', '$taille', Null);";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}


// INSCRIPTION //

function userCreate($roles,$username,$mail) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `user` (`id`,`roles`, `username`, `mail`, `password`) VALUES (NULL, '$roles', '$username', '$mail', Null);";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}