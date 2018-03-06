<?php
require_once ('model/FlagManager.php');
require_once ('model/WriteManager.php');
require_once ('model/ChapterManager.php');
require_once ('../frontend/model/CommentManager.php');
require_once ('../frontend/model/PostManager.php');

  





function modcomments(){

$FlagManager= new FlagManager();
$FlagManager->getFlagComments();


}


function deletecomments($id){

    $CommentManager= new CommentManager();
    $CommentManager->deletecomments($id);
    echo '<script>alert("le commentaire a été éffacé");</script>'; 
    header("location:../backend/index.php?action=modcomments");   
    

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
    $WriteManager = new WriteManager();
    $affectedLines=$WriteManager->write($_POST['title'],$_POST['author'],$_POST['content'],$_POST['date_created']);
    if ($affectedLines === false) {
		throw new Exception('Impossible d\'ajouter le commentaire !');
	}
    require('view/backend/WriteChapterView.php'); 
}

function deco(){
    
    require ('view/backend/decoView.php'); 
    



}

function HomeAdmin(){
    require ('view/backend/backView.php');




}

?>