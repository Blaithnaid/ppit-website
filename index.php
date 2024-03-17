<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Nephin Media | Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		footer {
			margin-top: auto;
			width: 100%;
			text-align: center;
			background-color: #f2f2f2;
			padding: 1px;
		}

		.flexcontent {
			margin: 0 auto;
			margin-top: 15px;
			width: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			height: 100%;
		}

		.flexitem {
			min-height: 280px;
			flex-wrap: wrap;
			min-width: 40%;
			margin: 20px;
			padding: 20px;
			text-align: center;
			background-color: #f2f2f2;
			border: 1px solid black;
		}

		.flexitem img {
			width: 380px;
			height: auto;
		}
	</style>
</head>

<body>
	<div id="logogradient"></div>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
	<div class="home_spread">
		<header>
			<nav>
				<a href="index.php">Home</a>
				<a href="about.php">About</a>
				<a href="contact.php">Contact</a>
				<a href="gallery.php">Gallery</a>
			</nav>
		</header>
		<div class="spread_text">
			<p>Welcome to Nephin Media</p>
			<p>Here is some text about the site</p>
			<p style="font-size: 0.8em; margin-top: 30px;">↓ Scroll down to learn more about me.</p>
		</div>
		<?php
		if (isset ($_SESSION['user_id'])) {
			echo "<div class='logoutbutton'><a href='logout.php'>!!!!!LOGGED IN!!!!!</a></div>";
		} else {
			echo "<div class='loginbutton'><a href='login.php'>!!!!!LOGGED OUT!!!!!</a></div>";
		}
		echo "<h1>Hi, " . $_SESSION['username'] . "</h1>";
		?>
	</div>
	<div class="spread_separator">
		Scroll down more lol
	</div>
	<div class=flexcontent>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 1</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 2</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 3</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 4</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 5</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/lockscreen.png" alt="">
			<h2>Heading 6</h2>
			<p>Some text</p>
		</div>
	</div>
	<footer>
		<p>&copy; 2024 Nephin Media</p>
	</footer>
</body>

</html>