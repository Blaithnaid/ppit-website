<?php
require_once "functions.php"; // include the functions file so we can use createConnection() and validateUser()
session_start(); // start or resume the session
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_SESSION["user_id"])) {
	header("Location: index.php");
} elseif (isset($_POST["username"]) && isset($_POST["password"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$conn = createConnection();
	if (!$conn) {
		$promptText = "Connection failed: " . mysqli_connect_error();
	}
	if (validateUser($username, $password) === true) {
		header("Location: index.php");
	} else {
		$promptText =
			"The entered username or password is incorrect.<br>Please try again.";
	}
} else {
	$promptText = "Please enter a username and password.";
}
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

	<title>Nephin Media | Login</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
		body {
			margin: 0;
			width: 100%;
			background: url('img/background_scaled.png') no-repeat center fixed;
			background-size: cover;
		}
	</style>
	<link rel="stylesheet" href="css/forms.css">
	<link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
</head>

<body>
	<img src="img/nephin.svg" class="logo" height="120px" alt="">
	<div id="back">
		<a href="index.php">Back to Home</a>
	</div>
	<div id="login-box">
		<h1>Login</h1>
		<p>
			<?php echo $promptText; ?>
		</p>
		<form action="login.php" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Login">
		</form>
		<a href="register.php">
			<h4>Create an Account</h4>
		</a>
	</div>
</body>