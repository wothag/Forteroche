<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/01/2018
 * Time: 11:26
 */

function getChapters()
{
    $db = dbConnect();

    // On récupère les 5 derniers billets
    $req = $db->query('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y à %Hh%imin%ss\') AS date_created_fr FROM chapters ORDER BY date_created_fr DESC LIMIT 0, 5');

    return $req;
}




function getChapter($ChapterId)
{
   $db = dbConnect();

   //on recupere un seul chapitre par son id

    $req = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y à %Hh%imin%ss\') AS date_created_fr FROM chapters WHERE id = ?');
    $req->execute(array($ChapterId));
    $chapter = $req->fetch();

    return $chapter;
}

function getComments($ChapterId)
{
    $db = dbConnect();


    //on recupère les commentaires associés au chapter par son id
    $comments = $db->prepare('SELECT id, author, comments, DATE_FORMAT(date_comments, \'%d/%m/%Y à %Hh%imin%ss\') AS date_comments_fr FROM comments WHERE chapter_id = ? ORDER BY date_comments_fr DESC');
    $comments->execute(array($ChapterId));

    return $comments;
}

function postComment($ChapterId, $author, $comments)
{
	$db = dbConnect();
	$comments = $db->prepare('INSERT INTO comments(chapter_id, author, comments, date_comment) VALUES(?, ?, ?, NOW())');
	$affectedLines = $comments->execute(array($ChapterId, $author, $comments));

	return $affectedLines;
}


// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=Forteroche;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>












}
