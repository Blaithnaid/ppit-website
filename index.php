<?php
session_start(); // Start the session
error_reporting(E_ALL); // Report all errors
ini_set("display_errors", 1); // Display all errors
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Google tag (gtag.js) -->
	<!-- This enables the use of Google Analytics. It is present on all pages on this site. -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-J2Y2F7J741"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-J2Y2F7J741');
	</script>

	<title>Nephin Media | Home</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
		header {
			background-color: transparent;
		}

		@media screen and (max-width: 800px) {
			.flexcontent {
				flex-direction: column;
			}
			.flex-item {
				flex-basis: 100%;
			}
		}

		@media screen and (max-width: 500px) {
			.logo {
				width: 60px;
				height: 60px;
			}

			.spread-text {
				right: 10%;
			}
		}

		.flex-content {
			background: rgb(47, 51, 75);
			background: linear-gradient(0deg, rgba(47, 51, 75, 1) 14%, rgba(255, 255, 255, 1) 62%);
		}
	</style>
</head>

<body>
	<div class="home-spread">
		<header>
			<img src="img/nephin.svg" height="200px" class="logo" alt="Website logo">
			<nav style="margin-right: 0;">
				<a href="index.php"><u>Home</u></a>
				<a href="about.php">About</a>
				<a href="contact.php">Contact</a>
				<a href="gallery.php">Gallery</a>
			</nav>
		</header>
		<div class="spread-text">
			<h4>Welcome to Nephin Media</h4>
			<h4>Multimedia production for the modern age.</h4>
			<p style="font-size: 0.8em; margin-top: 30px;">↓ Scroll down to learn more about me.</p>
		</div>
		<div class="context-links">
			<?php if (isset($_SESSION["user_id"])) {
				echo "<div class='logout-button'><a href='logout.php'>Log out</a></div>";
			} else {
				echo "<div class='login-button'><a href='login.php'>Log in</a></div>";
			}
			if (isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] === true) {
				echo "<div class='admin-button'><a href='admin.php'>Admin</a></div>";
			} ?>
		</div>
	</div>
	<div class="spread-separator">
		If you're looking to talk to me, head straight over to the <a href="contact.php">Contact</a> page!
	</div>
	<div class=flex-content>
		<div class="flex-item">
			<img src="img/index/photography.png" alt="">
			<h2>Photography</h2>
			<p>
				With considerable experience operating both DSLRs and vintage point-and-shoots,
				I bring a genuine passion to both capturing and editing images.</p>
		</div>
		<div class="flex-item">
			<img src="img/index/webdesign.png" alt="">
			<h2>Web Design</h2>
			<p>
				I built this website! I've worked with HTML, CSS, JS, PHP, and databases to create a variety of
				websites,
				both for clients and personal projects. I'm also familiar with WordPress and Wix.
			</p>
		</div>
		<div class="flex-item">
			<img src="img/index/softdev.png" alt="">
			<h2>Software Development</h2>
			<p>
				Strongly familiar with Java, Python, C#, as well as JavaScript.
				I'm comfortable developing both front-end and back-end systems. I'm also familiar with SQL and Postgres
				databases.
			</p>
		</div>
		<div class="flex-item">
			<img src="img/index/blender.png" alt="">
			<h2>3D Modeling</h2>
			<p>
				I have experience modeling, texturing, rigging and animating characters, and building shaders
				- 3D Modeling really appeals to me, and I'm looking to expand my knowledge in this area.
			</p>
		</div>
		<div class="flex-item">
			<img src="img/index/audiodesign.png" alt="">
			<h2>Audio Design/Production</h2>
			<p>With a PLC in Studio & Live Sound Production, I've worked with a variety of audio equipment & software.
				I'm comfortable with both recording and mixing audio, as well as designing audio and producing music.
			</p>
		</div>
		<div class="flex-item">
			<img src="img/index/videoediting.png" alt="">
			<h2>Video Editing</h2>
			<p>
				With experience in Adobe Premiere Pro, After Effects, and Final Cut Pro, I'm comfortable editing
				videos for a variety of purposes, including YouTube, short films, and promotional material.
		</div>
	</div>
	<footer>
		<p>&copy;
			<?php echo date("Y"); ?> Nephin Media
		</p>
	</footer>
</body>

</html>