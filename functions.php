<?php
function createConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fuelstock_beta";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    if(!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

function redirectLogin() {
    // set a variable in the session to indicate that the user tried to access a page without logging in
    $_SESSION['triedNoLogin'] = "no";
    header("Location: login.php");
    exit();
}
