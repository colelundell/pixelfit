<?php 
	//Create database connection
	define("DB_SERVER", "localhost");
	define("DB_USER", "clundell");
	define("DB_PASS", "Bears!123");
	define("DB_NAME", "pixelfit");
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	global $connection;
	
	//Check for connection errors
	if(mysqli_connect_errno()) {
		die("Database connection failed: " . mysqli_connect_error() . " ( " .mysql_connect_errno() . " ) ");
	}
?>