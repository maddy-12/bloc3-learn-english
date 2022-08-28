<?php
include_once "BDD/bdd.php";
//Get a post by its ID
function GetOneLessonFromId($id)
{
    $con = getDBConnexion();
    $response = "SELECT * from cours where cours_id = '$id' ";
    $response =  $con->query($response);
    $lesson_card = $response->fetchAll();
    if (!empty($lesson_card)) {
        return $lesson_card[0];
    } else {
        $errMsg = "ce cours n'existe pas encore";
        return $errMsg;
    }
}
//Get all the posts
function GetAllLessons()
{
    $con = getDBConnexion();
    $response = "SELECT * FROM cours";
    $response = $con->query($response);
    return $response;
}

//Create new post

function CreateNewLesson($title, $description, $content)
{
    $con = getDBConnexion();
    $response = $con->prepare("INSERT INTO cours (title, description, content) VALUES (:title,:description, :content)");
    $response->execute(
        array(
            "title" => $title,
            "description" => $description,
            "content" => $content,
        )
    );
    return $response;
}

// Update
function UpdateLesson($cours_id, $title, $description, $content)
{
    $con = getDBConnexion();
    $response = $con->prepare("Update cours set title = :title, description = :description, content = :content where cours_id = :cours_id");
    $response->execute(
        array(
            "cours_id" => $cours_id,
            "title" => $title,
            "description" => $description,
            "content" => $content
        )
    );
}

//Delete lesson

function DeleteLesson($id)
{
    try {
        $con = getDBConnexion();
        $response = "DELETE from cours where cours_id = '$id'";
        $response = $con->exec($response);
        return $response;
    } catch (PDOException $e) {
        echo $response . "<br>" . $e->getMessage();
    }
}

//Search methode
function  SearchLessons($search)
{
    $con = getDBConnexion();
    $response = $con->prepare(
        "SELECT * FROM cours WHERE content like :search "
    );
    $searchWithPercent = "%$search%";
    $response->execute(
        array(
            "search" => $searchWithPercent
        )
    );
    return $response->fetchAll();
}
