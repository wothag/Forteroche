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
    require('view/backend/CommentView.php');

}

function modifycomment($id){

    $CommentManager= new CommentManager();
    $CommentManager->modifycomment($id);
    

}



function allchapters(){

    $ChapterManager= new ChapterManager();
    $allchapters=$ChapterManager->getAllChapters();
   
    require('view/backend/AllChaptersView.php');

   

}

function writechapter(){
    /*$WriteManager=new WriteManager;
    $WriteManager->writeChapter();*/
    require ('view/backend/ChapterView.php'); 
    



}

function deco(){
    
    require ('view/backend/decoView.php'); 
    



}

function HomeAdmin(){
    require ('view/backend/backView.php');




}

?>