<?php
session_start();
$action = $_GET["action"] ?? "display";
include "model/post.php";

if ($action == "DELETE") {
    $id = $_GET["id"];
} else {
    $id = $_GET["id"];
    $title = $_GET["title"];
    $content = $_GET["content"];
}

//create
if ($action == "create") {
    CreateNewPost($_POST['title'], $_POST['content']);
}

//Update
if (isset($_SESSION['user_id']) && $action == "UPDATE") {
    UpdatePost($_GET['id'], $_POST['title'], $_POST['content']);
}

//delete
if (isset($_SESSION['user_id']) && $action == "DELETE") {
    DeletePost($_GET['id']);
}
