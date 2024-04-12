<?php
include_once "functions.php";
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
$resultsText = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message = $_POST["message"];
    $submission_type = $_POST["submission_type"];


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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J2Y2F7J741"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-J2Y2F7J741');
    </script>

    <title>Nephin Media | Contact</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
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
        <form action="contact.php" method="post" class="contact-form">
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