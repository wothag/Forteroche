<?php
require_once ('../frontend/model/Database.php');

class FlagManager extends Database
{   


public function getFlagComments()
    {
        $db = $this->dbConnect();
        $flagcomment=$db->query('SELECT id, author, comment,post_id, DATE_FORMAT(date_comment, \'%d/%m/%Y\') AS date_comment_fr FROM comments WHERE flag= 1 ORDER BY id DESC');
       
     require_once ('view/backend/CommentsView.php');   
    }
}