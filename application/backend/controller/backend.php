<?php
require_once ('model/FlagManager.php');
require_once ('model/WriteManager.php');
require_once ('model/ChapterManager.php');
require_once ('../frontend/model/CommentManager.php');
require_once ('../frontend/model/PostManager.php');


/**
 *function using a methode to check all the flag comments
 */
function modcomments()
{
    if (isset($_SESSION['admin'])) {
                $FlagManager = new FlagManager();
                $FlagManager->getFlagComments();
            } else {
                echo "vous n'êtes pas autorisé pour cette action";
            }
}



/**
 * @param $id
 *
 * function call a method to delete comments by id
 */

function deletecomments($id)
{
    if (isset($_SESSION['admin'])){
            $CommentManager= new CommentManager();
            $CommentManager->deletecomments($id);
            echo '<script>alert("le commentaire a été éffacé");</script>';
            header("location:../backend/index.php?action=modcomments");
    }else
    {
        echo"vous n'êtes pas autorisé pour cette action";
    }
}

/**
 * @param $id
 * function call a method to delete chapter by id
 */

function deletechapter($id){

    if (isset($_SESSION['admin'])){
        $ChapterManager= new ChapterManager();
        $ChapterManager->deletechapter($id);
        echo '<script>alert("le commentaire a été éffacé");</script>';
        header("location:../backend/index.php?action=allChapters");
    }else
    {
        echo"vous n'êtes pas autorisé pour cette action";
    }
}

/**
 * @param $id
 * function call a method to modify chapter by id
 */
function modifychapter($id){
    if (isset($_SESSION['admin'])){
        $ChapterManager = new ChapterManager();
        $data = $ChapterManager->getChapter($id);
        require('view/backend/ModifyChapterView.php');
    }else
    {
        echo"vous n'êtes pas autorisé pour cette action";
    }
}


/**
 * @param $id
 * Function call a method to modify comments by id
 */
function modifycomment($id){
    if (isset($_SESSION['admin'])) {
        $CommentManager = new CommentManager();
        $CommentManager->modifycomment($id);

        header("location:../backend/index.php?action=allChapters");
        echo '<script>alert("le commentaire a été modéré");</script>';
        exit;
    }else
    {
        echo"vous n'êtes pas autorisé pour cette action";
    }
}


/**
 *Function call a method to show all chapters
 */
function allchapters()
{
    if (isset($_SESSION['admin'])) {
        $ChapterManager = new ChapterManager();
        $allchapters = $ChapterManager->getAllChapters();
        require('view/backend/AllChaptersView.php');
    } else {
        echo "vous n'êtes pas autorisé pour cette action";
    }
}

function writechapter()
{
    if (isset($_SESSION['admin'])) {
        require('view/backend/WriteChapterView.php');
    } else {
        echo "vous n'êtes pas autorisé pour cette action";
    }
}

/**
 * @param $title
 * @param $author
 * @param $content
 * Function to write and publish new chapter in backend
 *
 */
function validchapterform($title, $author, $content)
{
    if (isset($_SESSION['token']) and isset($_POST['token']) and !empty($_SESSION['token']) and !empty($_POST['token'])) {
        if ($_SESSION['token'] == $_POST['token']) {
            $WriteManager = new WriteManager();
            $affectedLines = $WriteManager->write($title, $author, $content);
            if ($affectedLines) {
                header('location:index.php?action=allChapters');
            } else {
                echo "Erreur de vérification, vous n'êtes pas autorisé à publier ce chapitre";
            }
        }
    }
}

/**
 * @param $id of the chapter (hidden $_POST['id] in form
 * @param $title
 * @param $author
 * @param $content
 * Function to modify and publish chapter in backend
 */
function validUpdatechapterform($id, $title, $author, $content)
{

    if (isset($_SESSION['token']) and isset($_POST['token']) and !empty($_SESSION['token']) and !empty($_POST['token']))
        {
            if ($_SESSION['token'] == $_POST['token']) {

                $WriteManager = new WriteManager();
                $affectedLines = $WriteManager->update($id, $title, $author, $content);
                     if ($affectedLines) {
                        header('location:index.php?action=allChapters');
                     }
            else{
                echo "Erreur de vérification, vous n'êtes pas autorisé à publier ce chapitre";
                }
            }
        }
 }


/**
 *function to connect to admin backend
 * Compare the $_POST from form in coViewphp */

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

/**
 *Functioo disconnect and killing session -> admin
 */
function deco()
		{
		    require('view/backend/decoView.php');
			if (isset($_SESSION['admin']))
			{
				unset($_SESSION['admin']);
				session_destroy(['admin']);
			}
		}


/**
 *function to root admin if session is set or not
 */
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