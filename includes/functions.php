<?php

$con = mysqli_connect("localhost", "cole", "Bears!123", "pixelfit");

function registerUser($email, $first_name, $last_name, $user_name, $password) {
	$query = "INSERT INTO users (email, first_name, last_name, user_name, password)
		      VALUES('" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . $user_name . "', '" . $password . "')";
	
	$result = mysqli_query($query, $con);
			
}

class user{
	var $username;
}

class character extends user{
	var $agility;
	var $intelligence;
	var $dexterity;
	var $vitality;
	var $strength;
	var $willpower;
	
	function listAllAttributes() {
		var_dump(get_object_vars($this));
	}
	 
}

$character1 = new character;


function checkQuery($query, $connection) {
	if(!$query) {
		die("Database query failed " . mysqli_error($connection));
	}
}

function login($username, $password, $connection) {
	$username = $_POST['username'];
	$clearpass = $_POST['password'];
	//Get salt and password from username
	$pass_query = "SELECT username, firstname, lastname, enabled, password, salt, user_id
                       FROM users
                       WHERE username='" . $username . "'";
	$passcheck = mysqli_query($connection, $pass_query);
	// $passinfo = mysqli_fetch_assoc($passcheck);
	$salt =null;
	$system_password=null;

	while($row = mysqli_fetch_assoc($passcheck)) {
		if($row['enabled'] = 1){
			$salt = $row['salt'];
			$system_password = $row['password'];
			continue;
		} else {
			echo 'This account is disabled';
		}

	}
	$sha = sha1($clearpass . '{' . $salt  . '}');
	//If count = 0 no user exists, if count = 1 a user was found
	$count = mysqli_num_rows($passcheck);
	if($username != null) {
		if($sha == $system_password) {
			if (!session_id()) {
				session_start();
				$_SESSION['name'] = $username;
				$_SESSION['logon'] = true;

				header('Refresh: 0.05;url=../index.php');
			}
		} else {
			echo $system_password;
		}
	} else {
		echo 'You do not have access to this resource';
	}

}

?>

?>