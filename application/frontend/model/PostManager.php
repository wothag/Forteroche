<?php

require_once 'Database.php';


class PostManager extends Database {



	public function getPosts()
	{

		$db = $this->dbconnect();
		$req = $db->query('SELECT id FROM chapters ');
		$post=$req->rowCount();
		return $post;
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

	public function paginate($page, $nb_chapters_per_page){

		$db = $this->dbconnect();

		$response = $db->prepare('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y\') AS date_created_fr FROM chapters ORDER BY id DESC LIMIT '		.(($page-1)*$nb_chapters_per_page).", $nb_chapters_per_page");
		$response->execute();
		return $response;
	}

}

