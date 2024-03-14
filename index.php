<!DOCTYPE html>
<html>
<head>
	<title>Nephin Media | Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
			margin: 0;
			width: 100%;
			height: 1000px;
			background: url('img/background_scaled.png');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		footer {
			margin-top: auto;
			position: absolute;
			bottom: 0;
			width: 100%;
			text-align: center;
			background-color: #f2f2f2;
			padding: 1px;
		}
	</style>
</head>
<body>
	<div id="logogradient"></div>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
	<header>
		<nav>
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="contact.php">Contact</a>
			<a href="gallery.php">Gallery</a>
		</nav>
	</header>
	<div id="home_spread">
		<main>
			<p>Welcome to Nephin Media</p>
			<p>Here is some text about the site</p>
		</main>
	</div>
<?php
if (!isset($_SESSION['x'])) {
	echo "<div id='logoutbutton'><a href='logout.php'>Logout</a></div>";
} else {
	echo "<div id='loginbutton'><a href='login.php'>Login</a></div>";
}
?>
	<footer>
		<p>&copy; 2020 Nephin Media</p>
	</footer>
</body>
</html>