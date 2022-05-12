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

function produitAdd($nom,$codeproduit,$affichagenom,$prix) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `produit` (`id`, `nom`, `codeproduit`,`affichagenom`, `prix`, `taille`) VALUES (NULL, '$nom', '$codeproduit', '$affichagenom' , '$prix', Null);";
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

// CREATION INTERVANANT //

function intervenantCreate($prenom,$nom,$salaire) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `intervenant` (`id`,`prenom`, `nom`, `salaire`) VALUES (NULL, '$prenom', '$nom', '$salaire');";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}