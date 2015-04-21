<?php

	session_start();

	$db = new PDO("mysql:host=*.dev;dbname=coinconquest;", "root", "tango255");


	function logout(){
		unset($_SESSION['userID']);
		?>
			<script type="text/javascript"> window.location.href = "index.php"; </script>
		<?
	}

	function get_user_id($email){
		global $db;

		$result = $db->query("SELECT * FROM users WHERE userEmail='$email'");
		while(($row = $result->fetch()) != false){
			return $row['userID'];
		}

		return null;
	}

	function auth_user($email, $password){
		global $db;

		$result = $db->query("SELECT * FROM users WHERE userEmail='$email'");
		while(($row = $result->fetch()) != false){
			return ($password == $row['userPassword']);
		}

		return false;
	}

	function is_loggedin(){
		return isset($_SESSION['userID']);
	}

	function user_register($user){
		global $db;

		$ok = $db->query("INSERT INTO users (userName, userPassword, userCoins, userEmail) VALUES('$user->name', '$user->password', $user->coins, '$user->email')");
		return $ok;
	}


	class User{
		var $id;
		var $name;
		var $password;
		var $coins;
		var $email;

		function __construct($id){
			$this->id = $id;
		}

		function fetch_build(){
			global $db;

			$result = $db->query("SELECT * FROM users WHERE userID=$this->id");
			while(($row = $result->fetch()) != false){
				$this->name = $row['userName'];
				$this->password = $row['userPassword'];
				$this->coins = $row['userCoins'];
				$this->email = $row['userEmail'];
			}
		}
	}


?>