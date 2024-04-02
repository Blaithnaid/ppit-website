<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Nephin Media | Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
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

		header {
			background-color: transparent;
		}

		@media screen and (max-width: 800px) {
			.flexcontent {
				flex-direction: column;
			}
		}
	</style>
</head>

<body>
	<div class="home_spread">
		<header>
			<div class="logo">
				<img src="img/nephin_transp.png" height="200px" alt="">
			</div>
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
		<?php if (isset($_SESSION["user_id"])) {
			echo "<div class='logoutbutton'><a href='logout.php'>Log out</a></div>";
		} else {
			echo "<div class='loginbutton'><a href='login.php'>Log in</a></div>";
		} ?>
	</div>
	<div class="spread_separator">
		If you're looking to talk to me, head straight over to the <a href="contact.php">Contact</a> page!
	</div>
	<div class=flexcontent>
		<div class="flexitem">
			<img src="img/index/photography.png" alt="">
			<h2>Photography</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/index/webdesign.png" alt="">
			<h2>Web Design</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/index/softdev.png" alt="">
			<h2>Software Development</h2>
			<p>With experience in Java, Python, C#,</p>
		</div>
		<div class="flexitem">
			<img src="img/index/blender.png" alt="">
			<h2>3D Modeling</h2>
			<p>
				I have experience modeling, texturing, rigging and animating characters, and building shaders
				- 3D Modeling really appeals to me, and I'm looking to expand my knowledge in this area.
			</p>
		</div>
		<div class="flexitem">
			<img src="img/index/audiodesign.png" alt="">
			<h2>Audio Design/Production</h2>
			<p>Some text</p>
		</div>
		<div class="flexitem">
			<img src="img/index/videoediting.png" alt="">
			<h2>Video Editing</h2>
			<p>Some text</p>
		</div>
	</div>
	<footer>
		<p>&copy; 2024 Nephin Media</p>
	</footer>
</body>

</html>
