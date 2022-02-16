<?php

function getDBConnexion()
{
    try {
        // Connexion à la base de données
        $host = "localhost";
        $db_name = "leanenglish";
        $username = "root";
        $password = "";

        $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
