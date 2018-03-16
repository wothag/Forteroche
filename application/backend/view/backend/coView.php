
	<!doctype html>
	<html>

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
</html>