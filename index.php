<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/01/2018
 * Time: 10:24
 */


require('controller/frontend.php');

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'listChapters')
    {
        listChapters();
    }
    elseif ($_GET['action'] == 'comments')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            listComments();
        } else
            {
            echo 'Attention : aucun identifiant de billet envoyé, il s\'agit d\'une erreur';
            }
    }
	elseif ($_GET['action'] == 'addComment')
	{
		if (isset($_GET['id']) && $_GET['id'] > 0)
		{
			if (!empty($_POST['author']) && !empty($_POST['comment']))
			{
				addComment($_GET['id'], $_POST['author'], $_POST['comment']);
			}
			else {
				echo 'Erreur : tous les champs ne sont pas remplis !';
			}
		}
		else
		{
			echo 'Erreur : aucun identifiant de billet envoyé';
		}
	}
}
 else {
 listChapters();
}



