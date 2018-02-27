<?php
require_once ('../frontend/model/Database.php');


class WriteManager extends Database
{   


public function writechapter()
    {
        $db = $this->dbConnect();
        $WriteChapter=$db->prepare('INSERT INTO comments(post_id, author, comment, date_comment) VALUES (?,?,?,NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));
    }
}