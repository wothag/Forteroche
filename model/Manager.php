<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 18/12/2017
 * Time: 17:52
 */



class Manager
{
	protected function dbConnect()
	{
		$db = new PDO('mysql:host=localhost;dbname=test_blog;charset=utf8', 'root', '');
		return $db;
	}

}