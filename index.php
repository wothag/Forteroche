<?php
session_start();
require('application/frontend/controller/frontend.php');
require 'application/frontend/inc/header.php';

try {
	if (!isset($_GET['action'])) {
		homePage();
	}
	else {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
		} elseif ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				post();
			} else {
				echo ('Commentaire signalé merci');
			}
		} elseif ($_GET['action'] == 'addComment') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (!empty($_POST['author']) && !empty($_POST['comment'])) {
					addComment($_GET['id'], $_POST['author'], $_POST['comment']);
				} else {
					throw new Exception ('Erreur : tous les champs ne sont pas remplis !');
				}
			} else {
				throw new Exception ('Erreur : aucun identifiant de billet envoyé');
			}
		} elseif ($_GET['action'] == 'flag' && ($_GET['id'] > 0)) {
			flag($_GET['id']);
		}
	}
}
catch(Exception $e) {
	echo 'Erreur : ' . $e->getMessage();
}
// la vue ne doit pas être dans l'index.php 
// l'index.php est le frontcontroller. Il contient le routeur
// il doit faire lien entre la request-la route demandée et le controlleur a appelé (un objet ou une fonction)
require 'application/frontend/inc/footer.php'; // a supprimer



