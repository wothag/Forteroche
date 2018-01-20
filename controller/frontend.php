<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/01/2018
 * Time: 16:24
 */
require('model/frontend.php');

function listChapters()
{
    $chapters = getChapters();

    require('view/frontend/listView.php');
}

function listComments()
{
    $chapter = getChapter($_GET['id']);
    $comments = getComments($_GET['id']);
    require('view/frontend/commentsView.php');


}

function addComment($postId, $author, $comment)
{
	$affectedLines = postComment($postId, $author, $comment);

	if ($affectedLines === false) {
		die('Impossible d\'ajouter le commentaire !');
	} else {
		header('Location: index.php?action=comments&id=' . $postId);
	}
}


