<?php
// Import the functions.php file
require_once 'functions.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Create a database connection
    $connection = createConnection();

    // Insert the username and hashed password into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);

    // Redirect to a success page
    header('Location: success.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Create Account</title>
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
    <div id="back"><a href="login.php">Back to Login</a></div>
    <h1>Account Creation</h1>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Create Account">
    </form>
</body>

</html>