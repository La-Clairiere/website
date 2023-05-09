<?php
require_once "config.php";
function getDB(): PDO
{
    $dsn =  'mysql:host=localhost;dbname='.$config['dbName'];
    $username = $config['dbUsername'];
    $password = $config['dbPassword'];

    try {
        $databaseConnection = new PDO($dsn, $username, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die ('Erreur lors de la connexion à la base de données :' . $e->getMessage());
    }

    return $databaseConnection;
} ?>