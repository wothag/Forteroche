<?php  
        require_once ('controller/backend.php');
        require_once ('model/WriteManager.php');
        require_once ('model/ChapterManager.php');
        require_once ('../frontend/model/PostManager.php');
        require_once ('../frontend/model/CommentManager.php');
    


  

try {
        if (isset($_GET['action'])){
            if ($_GET['action']=='modcomments'){
                modcomments();
            }
           
            if ($_GET['action']=='deleteComment'){
                deletecomments($_GET['id']);
            }
            if ($_GET['action']=='modifyComment'){
                modifycomment($_GET['id']);
            }
            if ($_GET['action']=='allChapters'){
                allchapters();
               
            }
            if ($_GET['action']=='deconnection'){
                deco();
            }
        }
        else 
    {
        HomeAdmin();
    }
}
catch(Exception $e){
    echo 'Erreur :'. $e->getMessage();
}?>