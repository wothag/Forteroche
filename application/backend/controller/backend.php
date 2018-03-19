<?php
require_once ('model/FlagManager.php');
require_once ('model/WriteManager.php');
require_once ('model/ChapterManager.php');
require_once ('../frontend/model/CommentManager.php');
require_once ('../frontend/model/PostManager.php');

  





function modcomments(){
	if (isset($_SESSION['admin'])){
		$FlagManager= new FlagManager();
		$FlagManager->getFlagComments();
	}

}


function deletecomments($id){

    $CommentManager= new CommentManager();
    $CommentManager->deletecomments($id);
    echo '<script>alert("le commentaire a été éffacé");</script>'; 
    header("location:../backend/index.php?action=modcomments");   
    

}

function deletechapter($id){

    $ChapterManager= new ChapterManager();
    $ChapterManager->deletechapter($id);
    echo '<script>alert("le commentaire a été éffacé");</script>'; 
    header("location:../backend/index.php?action=allChapters");   
    

}

function modifychapter($id){
	$ChapterManager = new ChapterManager();
	$data = $ChapterManager->getChapter($id);

	require('view/backend/ModifyChapterView.php');
}


function modifycomment($id){

    $CommentManager= new CommentManager();
    $CommentManager->modifycomment($id);
   
    header("location:../backend/index.php?action=modcomments"); 
    echo '<script>alert("le commentaire a été modéré");</script>'; 
    exit; 
    
}



function allchapters(){

    $ChapterManager= new ChapterManager();
    $allchapters=$ChapterManager->getAllChapters();
   
    require('view/backend/AllChaptersView.php');
}

function writechapter(){
    require('view/backend/WriteChapterView.php'); 
}

function validchapterform($title,$author,$content)
{
	{

		$WriteManager = new WriteManager();
		$affectedLines = $WriteManager->write($title, $author, $content);
		if ($affectedLines) {
			header('location:index.php?action=allChapters');
		}
	}
}

function validUpdatechapterform($id,$title,$author,$content)
{
	{

			$WriteManager = new WriteManager();
			$affectedLines = $WriteManager->update($id, $title, $author, $content);
			if ($affectedLines) {
				header('location:index.php?action=allChapters');

		}
	}
}


		function AdminConnect()
		{

			require('view/backend/Coview.php');

			if (isset($_POST['connect'])) {
				if (isset($_POST['pseudo'], $_POST['mdp'])) {
					$pseudo = htmlspecialchars($_POST['pseudo']);
					$mdp = htmlspecialchars($_POST['mdp']);

					if (!empty($pseudo) AND !empty($mdp)) {

						if (($pseudo == 'forteroche' AND $mdp == '1234') OR ($pseudo == 'admin' AND $mdp == '1234')) {
							$_SESSION['admin'] = true;
							header('Location: index.php?action=allChapters');
						} else {
							$erreur = 'Les identifiants que vous avez saisi sont invalides';
						}

					} else {
						$erreur = 'Veuillez saisir votre nom d\'utilisateur et votre mot de passe';
					}
				} else {
					$erreur = 'Veuillez saisir votre nom d\'utilisateur et votre mot de passe';
				}
			}


		}

		function deco()
		{

			require('view/backend/decoView.php');
			if (isset($_SESSION['admin']))
			{
				unset($_SESSION['admin']);
				session_destroy(['admin']);

			}


		}

		function HomeAdmin()
		{
			{
				if (!isset($_SESSION['admin'])) {
					AdminConnect();
				} else {

					header('Location: index.php?action=allChapters');
				}
			}


		}
?>