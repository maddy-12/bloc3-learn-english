<?php

//Get a post by its ID
function GetOnePostFromId($id)
{
    $con = getDBConnexion();
    $req = "SELECT * from cours where cours_id = '$id' ";
    $res =  $con->query($req);
    $lesson_card = $res->fetchAll();
    if (!empty($lesson_card)) {
        return $lesson_card[0];
    } else {
        $errMsg = "ce cours n'existe pas encore";
        return $errMsg;
    }
}
//Get all the posts
function GetAllPosts()
{
    $con = getDBConnexion();
    $req = "SELECT * FROM cours";
    $res = $con->query($req);
    return $res;
}

//Create new post

function CreateNewPost($title, $content)
{
    try {
        $con = getDBConnexion();
        $req = "INSERT INTO cours (title, content) 
			VALUES ('$title', '$content')";
        $res = $con->exec($req);
        return $res;
    } catch (PDOException $e) {
        echo $req . "<br>" . $e->getMessage();
    }
}

//Create new post
function UpdatePost($id, $title, $content)
{
    try {
        $con = getDBConnexion();
        $req = "UPDATE cours set title = '$title', content = '$content'
                WHERE cours_id = '$id'";
        $res = $con->exec($req);
        return $res;
    } catch (PDOException $e) {
        echo $req . "<br>" . $e->getMessage();
    }
}

//Delete post

function DeletePost($id)
{
    try {
        $con = getDBConnexion();
        $req = "DELETE from cours where cours_id = '$id'";
        $res = $con->exec($req);
        return $res;
    } catch (PDOException $e) {
        echo $req . "<br>" . $e->getMessage();
    }
}
//get new post
function getNewPost()
{
    $lesson['id'] = "";
    $lesson['title'] = "";
    $lesson['content'] = "";
}

//Search methode
// function  SearchInPosts($search)
// {
//     global $PDO;
//     $response = $PDO->prepare(
//         "SELECT post.*, user.nickname "
//             . "FROM post LEFT JOIN user on (post.user_id = user.id) "
//             . "WHERE content like :search "
//             . "ORDER BY post.created_at DESC"
//     );
//     $searchWithPercent = "%$search%";
//     $response->execute(
//         array(
//             "search" => $searchWithPercent
//         )
//     );
//     return $response->fetchAll();
// }
