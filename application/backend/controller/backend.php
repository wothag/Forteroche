<?php

require_once ('model/FlagManager.php');
require_once ('model/WriteManager.php');
require_once ('../frontend/model/User.php');




function modcomments(){

$FlagManager= new FlagManager();
$FlagManager->getFlagComments();

}

function viewreaders(){

    $user=new user;
    $result=$user->find_all_users();
    require_once ('view/backend/UsersView.php'); 

}


function writechapter(){
    $WriteManager=new WriteManager;
    $chapter=$WriteManager->WriteChapters;
    



}

function HomeAdmin(){
    require('view/backend/HomeAdminView.php');




}

?>