<?php
session_start();
$action = $_GET["action"] ?? "display";
include_once "model/user.php";
include_once "model/post.php";

switch ($action) {
        ///////////////LOGIN//////////    
    case 'displayLogin':
        include_once "views/login.php";
        break;

    case 'login':
        $errorMsg = '';
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $userId = AdminLogin($_POST['username'], $_POST['password']);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                var_dump($_SESSION['userId']);
                header('Location: ?action=display');
            } else {
                $errorMsg = "Wrong login and/or password.";
                header('Location: ?action=displayLogin');
            }
        } else {
            header('Location: ?action=displayLogin');
            $errorMsg = "Identifiant ou mot de passe incorrectes";
        }
        echo $errorMsg;
        break;

        /////////////Logout///////////
    case 'logout':
        if (isset($_SESSION['userId'])) {
            unset($_SESSION['userId']);
            session_destroy();
        }
        header('Location: ?action=displayLogin');

        break;

        ///////////////Create a new post/////////
    case 'displayCreateForm':
        include_once "views/createForm.php";
        break;
    case 'create':

        if (isset($_SESSION['userId'])) {

            CreateNewLesson($_POST['title'], $_POST['description'], $_POST['content']);
        } else {
            $errorMsg = "Votre cours n'a pas pu être créer, veuillez réessayer";
        }
        header('Location: ?action=adminPage');
        break;
        /////// Get Lesson by ID bouton modifier du formulaire///
    case "getLessonById":
        $lesson = GetOnePostFromId($_GET['id']);
        include "views/updateForm.php";
        break;

        ////// update bouton modifier du card //////////
    case 'updateLesson':
        if (isset($_POST['title'])) {
            if (UpdateLesson($_GET['id'], $_POST['title'], $_POST['description'], $_POST['content'])) {
                $SuccessMsg = "C'est ok";
            } else {
                $errorMsg = "oups!";
            }
        }
        header('Location: ?action=adminPage');
        break;
        ////// Liste des card pour admin /////:
    case 'adminPage':
        $lessons = GetAllLessons();
        include('views/adminPage.php');
        break;

        ////////////// détail/contenu du cours///////////////
    case 'lessonDetail':
        $lesson = GetOnePostFromId($_GET['id']);
        require('views/lessonDetail.php');
        break;

        //////////////Delete ////////////
    case 'delete':
        DeleteLesson($_GET['id']);
        header('Location: ?action=adminPage');
        break;
        //////////////Default display/////////////
    case 'display':
    default:
        $lessons = GetAllLessons();
        require('views/home.php');

        ////// Search //////////
        // if (isset($_GET["search"])) {
        //     $lessons = SearchInPosts($_GET["search"]);
        // } else {
        //     $lessons = GetAllPosts();
        // }

        // include_once "../models/CommentManager.php";
        // $comments = array();

        // foreach ($lessons as $onePost) {
        //     $idPost = $onePost['id'];
        //     $comments[$idPost] = GetAllCommentsFromPostId($idPost);
        // }

        // include_once "../views/DisplayPosts.php";
        // break;
}
