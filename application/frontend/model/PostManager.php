<?php

require_once 'Database.php';


class PostManager extends Database {



	public function getPosts()
	{

		$db = $this->dbconnect();
		$req = $db->query('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y\') AS date_created_fr FROM chapters ORDER BY id ASC');

		return $req;
	}

	public function getPost($postId)
	{
		$db = $this->dbConnect();

		//on recupere un seul chapitre par son id

		$req = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y\') AS date_created_fr FROM chapters WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}
}

