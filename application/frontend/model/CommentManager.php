<?php
/**
 * Created by PhpStorm.
 * userManager: drcha
 * Date: 20/01/2018
 * Time: 12:33
 */
class CommentManager
{
	public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}

	public function getComments($postId)
	{
		$db=$this->dbConnect();
		$comments=$db->prepare('SELECT id, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments WHERE post_id=? ORDER BY date_comment DESC LIMIT 0,5');
		$comments->execute(array($postId));
		return $comments;
	}

	public function PostComment($postId, $author, $comment)
	{
		$db=$this->dbconnect();
		$comments=$db->prepare('INSERT INTO comments(post_id, author, comment, date_comment) VALUES (?,?,?,NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));

		return $affectedLines;
	}



}