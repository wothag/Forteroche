<?php
require_once ('../frontend/model/Database.php');

class WriteManager extends Database
{



    public function write($title,$author,$content)

   {  
    $db = $this->dbConnect();     
          
        $WriteChapter=$db->prepare('INSERT INTO chapters(title, author, content, date_created) VALUES (?,?,?,NOW())');
        $affectedLines=$WriteChapter->execute(array($title,$author,$content));
        return $affectedLines;                                   
     
    }

	public function update($id, $title, $author, $content)

	{
		$db = $this->dbConnect();

		$WriteChapter=$db->prepare('UPDATE chapters SET  title=:title, author=:author, content=:content WHERE id=:id');
		$affectedLines=$WriteChapter->execute(array(
			'id' =>$id,
			'title' =>$title,
			'author' =>$author,
			'content' =>$content));
		return $affectedLines;

	}


   
}
