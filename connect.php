<?php
session_start();
/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname=projet_php;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}