<?php

session_start();
/*require_once ('model/WriteManager.php');
require_once ('model/ChapterManager.php');
require_once ('../frontend//model/PostManager.php');*/


if (isset($_SESSION['admin']) AND $_SESSION['admin']) {
	header('Location: view/backend/DashboardView.php');
	echo("bienvenue");
}

$erreur = '';
if (isset($_POST['submit'])) {
	if (isset($_POST['pseudo'], $_POST['mdp'])) {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mdp = htmlspecialchars($_POST['mdp']);

		if (!empty($pseudo) AND !empty($mdp)) {

			if (($pseudo == 'forteroche' AND $mdp == '1234') OR ($pseudo == 'admin' AND $mdp == '1234')) {
				$_SESSION['admin'] = true;
				header('Location: view/backend/DashboardView.php');
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
?>


<!doctype html>
<html>
<head>
    <title> Administration du Site</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../public/css/back-admin.css" rel="stylesheet" id="bootstrap-css">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#content'
        });
    </script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!--start of main panel-->
        <div class="col-sm-12 ">
            <div class="col-lg-offset-4 col-sm-3 ">
                <!-- Start form login -->
                <form method="POST">
                    <p class="h4 text-center mb-4">Connexion</p>

                    <!-- input name -->
                    <div class="md-form">
                        <i class="fa fa-toggle-on prefix grey-text"></i>
                        <input type="name" id="name" name="pseudo" class="form-control">
                        <label for="name">Votre nom</label>
                    </div>

                    <!-- input password -->
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="password" name="mdp" class="form-control">
                        <label for="password">Votre mot de passe</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-default" name="submit" type="submit">Soumettre</button>
                    </div>
                </form><!-- End form login -->
            </div><!--end of main panel-->
        </div>
    </div><!--end of bootstrap row-->
</div>    <!--end of bootstrap container-->

</body>
</html>

  