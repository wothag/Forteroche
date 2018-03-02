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

function deletechapter($id){

    $ChapterManager= new ChapterManager();
    $ChapterManager->deletechapter($id);
    echo '<script>alert("le commentaire a été éffacé");</script>'; 
    header("location:../backend/index.php?action=allChapters");   
    

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

function validchapterform($title,$author,$content)    {
    $WriteManager = new WriteManager();
    $affectedLines=$WriteManager->write($title,$author,$content);
    if ($affectedLines) { 
    header ('location:index.php?action=allChapters');
	
         }
    else
    {
      throw new Exception('Veuillez remplir tous les champs!');
    }
}

function deco(){
    
    require ('view/backend/decoView.php'); 
    



}

function HomeAdmin(){
    require ('view/backend/backView.php');




}

?>