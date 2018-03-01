<?php
require_once('../frontend/model/Database.php');

class WriteManager extends Database
{



public function write($title,$author,$content,$date_created_fr)

    { 
    $db = $this->dbConnect();     
          
        $WriteChapter=$db->prepare('INSERT INTO chapters(title, author, content, date_created VALUES (?,?,?,NOW())');
       $affectedLines=$WriteChapter->execute(array(
                                                    $title,
                                                    $author,
                                                    $content,
                                                    $date_created_fr));
        
      
        }
   
    }
