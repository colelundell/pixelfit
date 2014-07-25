
<?php

$con = mysqli_connect("localhost", "cole", "Bears!123", "pixelfit");

function registerUser($email, $first_name, $last_name, $user_name, $password) {
	$query = "INSERT INTO users (email, first_name, last_name, user_name, password)
		      VALUES('" . $email . "', '" . $first_name . "', '" . $last_name . "', '" . $user_name . "', '" . $password . "')";
	
	$result = mysqli_query($query, $con);
			
}

?>