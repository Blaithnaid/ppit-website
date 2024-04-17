<?php
require_once "functions.php"; // include the functions file so we can use createConnection() and validateUser()
session_start(); // start or resume the session
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-J2Y2F7J741"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-J2Y2F7J741');
	</script>

	<title>Nephin Media | Success!</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
	<style>
		body {
			margin: 0;
			width: 100%;
			max-height: 100vh;
			background: url('img/background_scaled.png');
			background-position: top center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		#successbox {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px 0 #000;
		}
	</style>
	<link rel="stylesheet" href="css/forms.css">
</head>

<body>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
	<div id="successbox">
		<h2>You have successfully created an account!<br>Redirecting to the login page in 3s...</h2>
		<?php header("refresh:3;url=login.php"); ?>
	</div>
</body>

</html>