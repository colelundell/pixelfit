<?php
if(!isset($_SESSION)){
    session_start();
}
if(!$_SESSION['logon']) {
	header('location:./login.php');
}
require_once('db.php');
require_once('querys.php');
require_once('/includes/functions.php');
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Pixel Fitness</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<ul>
						<li>
							<?php echo '<a href="index.php?user_id='. $_SESSION['session_id'] . '" id="menu1">home</a>';?>
						</li>
						<li>
							<?php echo '<a href="media.php?user_id='. $_SESSION['session_id'] . '" id="menu2">media</a>';?>
						</li>
						<li>
							<?php echo '<a href="games.php?user_id='. $_SESSION['session_id'] . '" id="menu3">games</a>';?>
						</li>
						<li>
							<?php echo '<a href="about.php?user_id='. $_SESSION['session_id'] . '" id="menu4">about</a>';?>
						</li>
						<li>
							<?php echo '<a href="blog.php?user_id='. $_SESSION['session_id'] . '" id="menu5">blog</a>';?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
