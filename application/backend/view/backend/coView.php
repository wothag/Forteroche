
<!doctype html>
<html>
    <head>
        <title> Connection à l'administration du site</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
            <script>tinymce.init({
                    selector: '#content'
                });
            </script>
    </head>
                        <div class ="container">
                            <div class="row">
                                <div class="col-sm-offset-4 ">
                                    <h2>Connexion</h2>
                                        <form method="POST">
                                            <input type="text" placeholder="Nom d'utilisateur" name="pseudo" <?php if(isset($pseudo)) { ?> value="<?= $pseudo ?>"<?php } ?>>
                                             <br>
                                            <input type="password" placeholder="Mot de passe" name="mdp" <?php if(isset($mdp)) { ?> value="<?= $mdp ?>"<?php } ?>>
                                            <br>
                                            <input type="submit" name="connect" value="Se connecter">
                                        </form>
                                </div>
                            </div>
                        </div>

</html>