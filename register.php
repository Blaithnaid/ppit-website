<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Import the functions.php file
require_once "functions.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmpassword"];
    $returnText = "";

    // Check if the password and confirm password match
    if ($password !== $confirmPassword) {
        $returnText = "Passwords do not match";
        exit();
        // Check if the username is already taken
    } elseif (usernameExists($username)) {
        $returnText = "Username already taken";
        exit();
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create a database connection
        $connection = createConnection();

        // Insert the username and hashed password into the database
        $query = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$hashedPassword')";
        mysqli_query($connection, $query);

        // Close the database connection
        mysqli_close($connection);

        // Redirect to a success page
        header("Location: success.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Create Account</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
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
    <img src="img/nephin.svg" height="120px" alt="">
    <div id="back">
        <a href="login.php">Back to Login</a>
    </div>
    <div id="loginbox">
        <h1>Create Account</h1>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required><br>

            <input type="submit" value="Create Account">
        </form>
    </div>
</body>

</html>