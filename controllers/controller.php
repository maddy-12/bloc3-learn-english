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
                $errorMsg = "Identifiants ou mot de passe incorrectes";
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
        header('Location: ?action=home');

        break;

        ///////////////Create a new post/////////
    case 'displayCreateForm':
        if (isset($_SESSION['userId'])) {
            include_once "views/createForm.php";
        } else {
            header('Location: ?action=home');
        }

        break;
    case 'create':
        if (isset($_SESSION['userId'])) {
            if (isset($_SESSION['userId'])) {

                CreateNewLesson($_POST['title'], $_POST['description'], $_POST['content']);
            } else {
                $errorMsg = "Votre cours n'a pas pu être créer, veuillez réessayer";
            }
            header('Location: ?action=adminPage');
        } else {
            header('Location: ?action=home');
        }
        break;
        /////// Get Lesson by ID bouton modifier du formulaire///
    case "getLessonById":
        if (isset($_SESSION['userId'])) {
            $lesson = GetOneLessonFromId($_GET['id']);
            include "views/updateForm.php";
        } else {
            header('Location: ?action=home');
        }

        break;

        ////// update bouton modifier du card //////////
    case 'updateLesson':

        if (isset($_SESSION['userId'])) {
            if (isset($_POST['title'])) {
                if (UpdateLesson($_GET['id'], $_POST['title'], $_POST['description'], $_POST['content'])) {
                    echo ($SuccessMsg = "Les modification ont été enregistrer");
                } else {
                    echo ($errorMsg = "oups! une erreur est survenue");
                }
            }
            header('Location: ?action=adminPage');
        } else {
            header('Location: ?action=home');
        }

        break;
        ////// Liste des card pour admin /////:
    case 'adminPage':
        if (isset($_SESSION['userId'])) {
            $lessons = GetAllLessons();
            include('views/adminPage.php');
        } else {
            header('Location: ?action=home');
        }

        break;

        ////////////// détail/contenu du cours///////////////
    case 'lessonDetail':
        $lesson = GetOneLessonFromId($_GET['id']);
        require('views/lessonDetail.php');
        break;

        //////////////Delete ////////////
    case 'delete':
        if (isset($_SESSION['userId'])) {
            DeleteLesson($_GET['id']);
            header('Location: ?action=adminPage');
        } else {
            header('Location: ?action=home');
        }

        break;
        //////////////Default display/////////////
    case 'display':
    default:
        $lessons = GetAllLessons();
        ////// Search //////////
        if (isset($_GET["search"])) {
            $lessons = SearchLessons($_GET["search"]);
        }
        require("views/home.php");
        break;
}
