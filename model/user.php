<?php
include_once("api-rest/bdd.php");

//Get the username & pwd in order to login
function AdminLogin($username, $password)
{
    $connexion = getDBConnexion();
    $response = $connexion->prepare("SELECT user_id FROM user WHERE username = :username AND password = MD5(:password)");
    $response->execute(
        array(
            "username" => $username,
            "password" => $password
        )
    );
    if ($response->rowCount() == 1) {
        $row = $response->fetch();
        return $row['user_id'];
    } else {
        return -1;
    }
}
