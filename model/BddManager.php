<?php
/**
 * Created by PhpStorm.
 * User: drcha
 * Date: 14/12/2017
 * Time: 16:57
 */

class BddManager
{
	protected $db;
	protected $hostname = 'localhost';
	protected $login = 'root';
	protected $pwd = '';
	protected $dbname = 'forteroche';

	public function __construct()
	{
		$db = new PDO('mysql:hostname='. $this->hostname.';dbname='.$this->dbname.';charset=utf8',
			$this->login, $this->pwd);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db = $db;
	}
}


