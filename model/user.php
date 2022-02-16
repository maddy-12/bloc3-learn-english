<?php
include("api-rest/bdd.php");

//Get the username & pwd in order to login
function AdminLogin($username, $password)
{
    global $connexion;
    $errorMsg = NULL;
    $response = $connexion->prepare("SELECT id FROM user WHERE username = 'admin' AND password = MD5('azertyuiop') ");
    $response->execute(
        array(
            "username" => $username,
            "password" => $password
        )
    );
    if ($response->rowCount() == 1) {
        $row = $response->fetch();
        return $row['id'];
    } else {
        return -1;
    }
}
