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
	<title>Games - Game Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
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
							<a href="about.php" id="menu4">about</a>
						</li>
						<li>
							<a href="blog.php" id="menu5">blog</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
		<?php echo $_SESSION['session_id']?>
