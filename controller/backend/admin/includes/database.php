<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 05/02/2018
 * Time: 19:22
 */

require_once("config.php");

class Database
{
	public $db;

	function __construct()
	{
		$this->dbConnect();
	}

	public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
		return $db;
	}
}
$database = new Database();

