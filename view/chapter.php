<?php

class chapter

{

private $id;
private	$titre;
private $contenu;
private $auteur;
private $date_creation;


public function __construct()
{
echo 'Voici le constructeur !';// Message s'affichant une fois que tout objet est créé.
$this->setTitre($titre); //
$this->setContenu($contenu); //
$this->setDate_creation($date_creation); //
}

//getters

public function id()
{
return $this->id;
}

public function titre()
{
return $this->titre;
}

public function contenu()
{
return $this->contenu;
}

public function auteur()
{
return $this->auteur;
}


public function date_creation()
{
return $this->date_creation;
}

//setters

public function setId($id)
{
$id =(int) $id;
if ($id>0)
{
$this->id=$id;
}

}

public function setTitre($titre)
{
if (is_string($titre))
{
$this->titre=$titre;
}

}

public function setContenu($contenu)
{
if (is_string($contenu))
{
$this->contenu=$contenu;
}

}

public function setAuteur($auteur)
{
if (is_string($auteur))
{
$this->auteur=$auteur;
}

}

public function setDate_creation($date_creation)
{
{
$this->date_creation=$date_creation;
}

}

}
	



