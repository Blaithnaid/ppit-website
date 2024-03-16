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
			border-top: 30px solid gray;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
			margin: 0;
			padding-left: 10%;
			padding-right: 10%;
			height: 100%;
		}

		.flexitem {
			min-height: 280px;
			flex-wrap: wrap;
			min-width: 40%;
			margin: 10px;
			padding: 20px;
			text-align: center;
			background-color: #f2f2f2;
			border: 1px solid black;
		}

		.flexitem img {
			width: 380px;
			height: auto;
		}

		.spread_text {
			font-size: 1.4em;
			text-align: justify;
			color: black;
			position: absolute;
			bottom: 10%;
			right: 18%;
			margin: 0;
			padding: 0;
		}

		.spread_text p {
			margin: 10px;
			padding: 0;
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
		if (isset ($_SESSION['x'])) {
			echo "<div class='logoutbutton'><a href='logout.php'>Logout</a></div>";
		} else {
			echo "<div class='loginbutton'><a href='login.php'>Login</a></div>";
		}
		?>
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