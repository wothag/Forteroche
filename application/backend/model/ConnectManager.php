<?php

require_once ('../frontend/model/Database.php');

class ConnectManager extends Database
{
	public function check($password , $pseudo) {
		$db = $this->dbConnect();
		echo('connection BD ok</br>');
		//var_dump($pseudo);
		//var_dump($password);

		$req = $db->prepare('SELECT pseudo, password FROM users WHERE pseudo = ?');
		$req->execute(array($pseudo));
		$admin = $req->fetch();
		echo('connection ok ET $admin FETCH');
		var_dump($admin['password']);
		var_dump(password_hash($password, PASSWORD_DEFAULT));
		if (password_verify($password ,$admin['password'])) {
			$adminInfo = array(
				'pseudo' => $admin['pseudo'],
				'password' => $admin['password']
			);

			echo('connection ok ET PASS VERIFY OK');
			return $adminInfo;

		} else {
			return false;
		}
	}


}