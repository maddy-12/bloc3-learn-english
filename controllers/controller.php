<?php
session_start();
$action = $_GET["action"] ?? "display";
include "model/post.php";

// if ($action == "DELETE") {
//     $id = $_GET["id"];
// } else {
//     $id = $_GET["id"];
//     $title = $_GET["title"];
//     $content = $_GET["content"];
// }

// //create
// if ($action == "create") {
//     CreateNewPost($_POST['title'], $_POST['content']);
// }

// //Update
// if (isset($_SESSION['user_id']) && $action == "UPDATE") {
//     UpdatePost($_GET['id'], $_POST['title'], $_POST['content']);
// }

// //delete
// if (isset($_SESSION['user_id']) && $action == "DELETE") {
//     DeletePost($_GET['id']);
// }

switch ($action) {

        ///////////////LOGIN//////////
    case 'login':

        if (
            isset($_POST['username']) && isset($_POST['password'])
        ) {
            $userId = AdminLogin($_POST['username'], $_POST['password']);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                header('Location: ?action=display');
            } else {
                $errorMsg = "Wrong login and/or password.";
                include "../views/login.php";
            }
        } else {
            include "../views/login.php";
        }
        break;

        /////////////Logout///////////
    case 'logout':
        if (isset($_SESSION['userId'])) {
            unset($_SESSION['userId']);
        }
        header('Location: ?action=display');

        break;

        ///////////////Create a new post/////////
    case 'create':

        if (isset($_SESSION['userId']) && isset($_POST['title'], $_POST['description'], $_POST['content'])) {

            CreateNewLesson($_SESSION['userId'], $_POST['title'], $_POST['description'], $_POST['content']);
        } else {
            $errorMsg = "Votre cours n'a pas puêtre créer, veuillez réessayer";
        }
        header('Location: ?action=create');
        break;
        ////// update //////////
    case 'updateLesson':
        require('models/recipes/recipe.php');
        if (isset($_POST['title'])) {
            UpdateLesson($_GET['id'], $_POST['title'], $_POST['description'], $_POST['content']);
        }
        header('Location: ?action=admin');
        break;
        //////////////Default display/////////////
    case 'display':
    default:
        $lessons = GetAllPosts();
        require('views/displayLessons.php');

        ////// Search //////////
        // if (isset($_GET["search"])) {
        //     $posts = SearchInPosts($_GET["search"]);
        // } else {
        //     $posts = GetAllPosts();
        // }

        // include "../models/CommentManager.php";
        // $comments = array();

        // foreach ($posts as $onePost) {
        //     $idPost = $onePost['id'];
        //     $comments[$idPost] = GetAllCommentsFromPostId($idPost);
        // }

        // include "../views/DisplayPosts.php";
        // break;
}
