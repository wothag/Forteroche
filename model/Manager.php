<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 20/01/2018
 * Time: 16:17
 */

class Manager

{
protected function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
		return $db;
	}
}