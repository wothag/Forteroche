<?php
/**
 * Created by PhpStorm.
 * userManager: drcha
 * Date: 20/01/2018
 * Time: 16:17
 */

class Manager

{
public function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $db;
	}
}