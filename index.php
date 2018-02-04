
<?php

require('controller/frontend/frontend.php');
require('controller/backend/backend.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
		}
		elseif ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				post();
			} else {

				throw new Exception('aucun identifiant de billet envoyé, il s\'agit)  d\'une erreur');
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
				else
				{
					throw new Exception ('Erreur : tous les champs ne sont pas remplis !');
				}
				}
				else
				{
				throw new Exception ('Erreur : aucun identifiant de billet envoyé');
				}
			}
		elseif ($_GET['action'] == 'connection')
		{
			admin();
		}
		elseif ($_GET['action'] == 'flag')
		{
			Flag();
		}


	}
	else {
		homePage();
	}
}
catch(Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}
?>



