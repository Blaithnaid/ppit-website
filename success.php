<?php
require_once 'functions.php'; // include the functions file so we can use createConnection() and validateUser()
session_start(); // start or resume the session
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Nephin Media | Success!</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		body {
			margin: 0;
			width: 100%;
			background: url('img/background_scaled.png');
			background-position: top center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<link rel="stylesheet" href="css/forms.css">
</head>

<body>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
</body>
</html>