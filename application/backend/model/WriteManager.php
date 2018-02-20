<?php
require_once ('../frontend/model/Database.php');

class WriteManager extends Database
{   


public function WriteChapters()
    {
        $db = $this->dbConnect();
        $WriteChapter=$db->prepare('INSERT INTO comments(post_id, author, comment, date_comment) VALUES (?,?,?,NOW())');
		$affectedLines = $comments->execute(array($postId, $author, $comment));
             
     require_once ('view/backend/ChpaterView.php');   
    }
}