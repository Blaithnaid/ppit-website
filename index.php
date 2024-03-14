<!DOCTYPE html>
<html>

<head>
	<title>Nephin Media | Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		#home_spread {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
			max-height: 720px;
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
			width: 100%;
			text-align: center;
			background-color: #f2f2f2;
			padding: 1px;
		}
		.flexcontent {
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
			margin: 0;
			padding-left: 20%;
			padding-right: 20%;
			/* width: 100%; */
			height: 100%;
		}
		.flexitem {
			margin: 10px;
			padding: 20px;
			text-align: center;
			background-color: #f2f2f2;
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<div id="logogradient"></div>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
	<div id="home_spread">
		<header>
			<nav>
				<a href="index.php">Home</a>
				<a href="about.php">About</a>
				<a href="contact.php">Contact</a>
				<a href="gallery.php">Gallery</a>
			</nav>
		</header>
		<main>
			<p>Welcome to Nephin Media</p>
			<p>Here is some text about the site</p>
		</main>
		<?php
		if (isset($_SESSION['x'])) {
			echo "<div id='logoutbutton'><a href='logout.php'>Logout</a></div>";
		} else {
			echo "<div id='loginbutton'><a href='login.php'>Login</a></div>";
		}
		?>
	</div>
	<div class=flexcontent>
		<div class="flexitem">
			<h2>Heading 1</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<h2>Heading 2</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<h2>Heading 3</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<h2>Heading 4</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<h2>Heading 5</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<h2>Heading 6</h2>
			<p>Some text</p>
		</div>
	</div>
	<footer>
		<p>&copy; 2024 Nephin Media</p>
	</footer>
</body>

</html>