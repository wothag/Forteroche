<?php 
require_once ('Database.php');


class User extends Database {

   public $id;
   public $username;
   public $password;
   public $first_name;
   public $last_name;
   public $ad;

    public function find_all_users() {

        $db = $this->dbConnect();
        $result_all_users = $db->query('SELECT * FROM users');
        return $result_all_users;
        }
    }
    









