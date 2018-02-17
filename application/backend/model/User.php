<?php

require 'Database.php';
class user


{
	public $users;



	public function dbConnect()
	{
		try{

			$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
			return $db;
		}
		catch(Exception $e)
		{
			die('Erreur :'.$e->getMessage());
		}

	}

	public function find_all_users ()
	{

		global $database;
		$req= Database::query('SELECT * FROM users');
		return $req;
		}
	}


