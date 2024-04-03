<?php
include_once "functions.php";
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message = $_POST["message"];
    $submission_type = $_POST["submission_type"];

    $resultsText = "";

    $query = "INSERT INTO `submissions` (`submission_type`, `email`, `name`, `message`) 
    VALUES ('$submission_type', '$email', '$name', '$message')";

    if ($conn->query($query) === TRUE) {
        $resultsText = "New record created successfully!";
    } else {
        $resultsText = "Error: " . $query . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Contact</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        header {
            padding: 10px;
        }

        header nav {
            margin-right: 15px;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            background-image: url("img/lockscreen.png");
            background-position: center;
            background-size: cover;
        }

        #results {
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="gallery.php">Gallery</a>
        </nav>
        <h3>Nephin Media | Contact</h3>
        <img src="img/nephin.svg" height="60px" alt="">
    </header>
    <main>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <label for="Submission Type">Submission Type:</label>
            <select id="submission_type" name="submission_type">
                <option value="booking">Booking</option>
                <option value="contact">Contact</option>
                <option value="support">Support</option>
            </select>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="10"></textarea>
            <input type="submit" value="Submit">
        </form>
        <div id="results">
            <?php echo "<p>" . $resultsText . "</p>"; ?>
        </div>
    </main>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
</body>

</html>