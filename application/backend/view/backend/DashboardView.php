<?php

session_start();

if(isset($_SESSION['admin']) AND $_SESSION['admin']) {
    header('Location: view/backend/administrationView.php');
}

$erreur = '';
if(isset($_POST['connect'])) {
    if(isset($_POST['pseudo'], $_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = htmlspecialchars($_POST['mdp']);

        if(!empty($pseudo) AND !empty($mdp)) {

            if(($pseudo == 'forteroche' AND $mdp == '1234') OR ($pseudo == 'admin' AND $mdp == '1234')) {
                $_SESSION['admin'] = true;
                header('Location: view/backend/BackView.php');
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
        <link href="public/css/StyleHome.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?familly=Crete+Round" rel="stylesheet">
        <title> Administration du Site</title>
    </head>
    <header>

        <div class="wrapper">
            <h1>Jean Forteroche<span class="orange">.</span><br></h1>
            <!--pan class="text-billet">Billet Simple pour l'Alaska</span>-->
            <nav>
                <ul>
                    <li><a href="index.php">accueil</a></li>
                    <li><a href="index.php?action=listPosts">liste des chapitres</a></li>
                    <li><a href="index.php?action=connection">connexion</a></li>
                </ul>
            </nav>
        </div>

    </header>

<?php ob_start(); ?>
    <h2>Connexion</h2>
    <form method="POST">
        <input type="text" placeholder="Nom d'utilisateur" name="pseudo" <?php if(isset($pseudo)) { ?> value="<?= $pseudo ?>"<?php } ?>>
        <br>
        <input type="password" placeholder="Mot de passe" name="mdp" <?php if(isset($mdp)) { ?> value="<?= $mdp ?>"<?php } ?>>
        <br>
        <input type="submit" name="connect" value="Se connecter">
    </form>
<?php if($erreur) { ?>
    <p style="color: red;"><?= $erreur ?></p>
<?php } ?>


<?php $content = ob_get_clean();?>
<?php require('template.php');?>