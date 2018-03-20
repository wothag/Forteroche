<?php
		session_start();
        require_once ('controller/backend.php');
        require_once ('model/WriteManager.php');
        require_once ('model/ChapterManager.php');
        require_once ('../frontend/model/PostManager.php');
        require_once ('../frontend/model/CommentManager.php');
    


  

try {
        if (!isset($_GET['action'])) {
            HomeAdmin();
        } else {
            if ($_GET['action'] == 'modcomments') {
                modcomments();
            }

            if ($_GET['action'] == 'deleteComment') {
                deletecomments($_GET['id']);
            }

            if ($_GET['action'] == 'modifychapter') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    modifychapter($_GET['id']);
                }
            }
            if ($_GET['action'] == 'deleteChapter') {
                deletechapter($_GET['id']);
            }

            if ($_GET['action'] == 'modifyComment') {
                modifycomment($_GET['id']);
            }

            if ($_GET['action'] == 'allChapters') {
                allchapters();
            }

            if ($_GET['action'] == 'writeChapter') {
                writechapter();
            }

            if ($_GET['action'] == 'validChapterForm') {
                validchapterform($_POST['title'], $_POST['author'], $_POST['content']);
            }

            if ($_GET['action'] == 'validUpdateChapterForm') {
                validUpdatechapterform($_POST['id'], $_POST['title'], $_POST['author'], $_POST['content']);
            }

            if ($_GET['action'] == 'deconnection') {
                deco();
            }
        }
		}catch(Exception $e)
{
	echo 'Erreur :'. $e->getMessage();
}

?>