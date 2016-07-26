<?php

require 'config.php';
/**
* Database Connection
*/
class DB_Connection
{
	
	public function __construct()
	{
		global $pdo;
		try {
			$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);
		} catch (PDOException $e) {
			exit('Database error!!');
		}
	}
}
