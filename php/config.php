<?php

 // Errors
 //error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
 error_reporting(E_ALL ^ E_NOTICE);
 ini_set('display_errors', 1);

 // Database Connexion


    define('DB_HOST', 'localhost');
    define('DB_PORT', '3306');
    define('DB_NAME', 'prunelle');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


 // Salt
 define('SALT', '95#tREsfe!');