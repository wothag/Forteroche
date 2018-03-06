<?php

require_once ("application/frontend/model/PostManager.php");
require_once ("application/frontend/model/CommentManager.php");






function flag($id)
{
	$CommentManager= new CommentManager();
	$CommentManager->updateComment($id);
	require ('application/frontend/view/frontend/CommentViewOk.php');
}


function homePage()
{
	require('application/frontend/view/frontend/homeView.php');


}
function listPosts()
{
    $postManager = new PostManager();
    $posts=$postManager->getPosts();

    require('application/frontend/view/frontend/listPostView.php');
}


function post()
{
	$postManager = new PostManager();
	$commentManager = new CommentManager();

	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require('application/frontend/view/frontend/postView.php');
}


function addComment($postId, $author, $comment)
{

	$commentManager = new CommentManager();
	$affectedLines = $commentManager->postComment($postId, $author, $comment);

	if ($affectedLines === false) {
		throw new Exception('Impossible d\'ajouter le commentaire !');
	} else {
		header('Location: index.php?action=comments&id=' . $postId);
	}
}


