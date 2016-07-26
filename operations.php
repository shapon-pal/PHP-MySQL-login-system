<?php
require_once 'functions.php';

/**
* All Operation will Go Here
*/
class login_registration
{
	public $table = DB_TABLE;

	function __construct()
	{
		$database = new DB_Connection();
	}

	// Registration
	public function registration($username, $password, $name, $email, $website)
	{
		global $pdo; # Object of DB Connection
		$query = $pdo->prepare("SELECT id FROM $this->table WHERE username = ? AND password = ?");
		$query->execute(array($username, $password));
		$num = $query->rowCount();

		if ($num == 0) {
			$sql = $pdo->prepare("INSERT INTO $this->table(username, password, name, email, website) VALUES(?, ?, ?, ?, ?)");
			$sql->execute(array($username, $password, $name, $email, $website));
			return true;
		}else{
			echo "<span class=\"error\">ERROR.. Username and Password already taken!</span>";
		}
         $query->close();
         $pdo  ->close();
	}

	// Login 
	public function login($email, $password)
	{
		global $pdo;
		$query = $pdo->prepare("SELECT id, username FROM $this->table WHERE email =? AND password =?");
		$query->execute(array($email, $password));
		$user_data = $query->fetch();

		$num = $query->rowCount();
		if ($num == 1) {
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['uid']   = $user_data['id'];
			$_SESSION['uname']   = $user_data['username'];
			$_SESSION['login_meg']   = 'Login Successful..';
			return true;
		}else
		{
			return false;
		}
	}

    // Show all user
	public function getAllUser(){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM $this->table ORDER BY id ASC");
		$sql->execute();
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}

	// Login session
	public function get_session(){
		return @$_SESSION['login'];
	}

}