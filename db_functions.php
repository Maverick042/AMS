<?php 
	class DB_Functions {
	 
		private $db;
	  
		function __construct() {
			include_once './db_connect.php'; 
			$this->db = new DB_Connect();
			$this->db->connect();
		}
	  
		function __destruct() {
			 
		}
	  
		public function storeUser($first_name, $last_name, $email, $password) {
			$result = mysql_query("INSERT INTO user(first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$password')");
			if ($result) { 
				$user_id = mysql_insert_id();
				$result = mysql_query("SELECT * FROM user WHERE user_id = $user_id") or die(mysql_error());
				if (mysql_num_rows($result) > 0) {
					return mysql_fetch_array($result);
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		public function checkIfExists($email, $password) {
			$result = mysql_query("SELECT * FROM user WHERE email = '$email' AND password = '$password'") or die(mysql_error());
			if (mysql_num_rows($result) > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function getAllUsers() {
			$result = mysql_query("SELECT * FROM user");
			return $result;
		}
	}
?>