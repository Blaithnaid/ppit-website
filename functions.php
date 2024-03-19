<?php
function createConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nephin_admin";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

function redirectLogin()
{
    // set a variable in the session to indicate that the user tried to access a page without logging in
    $_SESSION["triedNoLogin"] = "no";
    header("Location: login.php");
    exit();
}

function validateUser($username, $password)
{
    $conn = createConnection();
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            return true;
        }
        return "A user with that username does not exist. Please try again.";
    }
}
function usernameExists($username)
{
    $conn = createConnection();
    $query = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
    return false;
}
