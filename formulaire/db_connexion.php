<?php
session_start();
ini_set('display_errors',1);
ini_set('error_reporting',E_ALL);
/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname=;host=127.0.0.1';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>