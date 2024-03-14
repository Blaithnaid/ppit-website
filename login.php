<?php
require_once 'functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
	header('Location: home.php');
} else if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = createConnection();
	if (!$conn) {
		echo("Connection failed: " . mysqli_connect_error());
	}
	if ($attempt = validateUser($username, $password, $conn) === true) {
		header('Location: index.php');
	} else {
		echo $attempt;
	}
} else {
	echo "Please enter a username and password";
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
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

		#loginbox {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 300px;
			padding: 20px;
			background: white;
			border: 3px solid black;
			text-align: center;
		}

		#loginbox input {
			margin: 10px 0;
			padding: 10px;
			width: 100%;
			box-sizing: border-box;
		}

		#loginbox input[type="submit"] {
			background: #4CAF50;
			color: white;
			border: none;
		}

		.logo {
			position: absolute;
			top: 0;
			left: 0;
			padding: 15px;
		}

		#back {
			position: absolute;
			top: 15px;
			right: 10px;
		}

		#back a {
			background-color: white;
			text-decoration: none;
			color: black;
			border: 2px solid black;
			padding: 5px;
		}

		#back a:hover {
			background-color: black;
			color: white;
			border: 2px solid white;
		}
	</style>
</head>

<body>
	<div class="logo">
		<img src="img/nephin_transp.png" height="120px" alt="">
	</div>
	<div id="back">
		<a href="index.html">Back to Home</a>
	</div>
	<div id="loginbox">
		<h1>Login</h1>
		<form action="login.php" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>