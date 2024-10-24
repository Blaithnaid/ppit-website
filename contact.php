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

    // check if any fields are empty
    if (empty($email) || empty($name) || empty($message)) {
        $resultsText = "Please fill in all required fields.";
    } else {
        $query = "INSERT INTO `submissions` (`submission_type`, `email`, `name`, `message`) 
        VALUES ('$submission_type', '$email', '$name', '$message')";

        if ($conn->query($query) === TRUE) {
            $resultsText = "New record created successfully!";
        } else {
            $resultsText = "Error: " . $query . "<br>" . $conn->error;
        }
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
        main {
            height: 100%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: url(img/lockscreen.png) no-repeat center center/cover fixed;
            text-align: center;
        }

        /* contact form */
        .contact-form {
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 600px;
            margin: 0 auto;
        }

        .contact-form label {
            margin-top: 10px;
            font-size: 1.2em;
            text-decoration: underline;
        }

        .contact-form input,
        .contact-form select,
        .contact-form textarea {
            margin-top: 5px;
            width: 80%;
            padding: 10px;
            font-size: 1em;
        }

        .contact-form textarea {
            height: 200px;
        }

        /* mobile breakpoints */
        @media screen and (max-width: 800px) {
            main {
                padding: 20px;
            }

            header h3 {
                font-size: 1.2em;
            }

            .contact-form {
                width: 90%;
            }

            .contact-form input,
            .contact-form select,
            .contact-form textarea {
                width: 100%;
            }
        }
    </style>
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header>
        <div class="hamburger-toggle" onclick="toggleMenu()">
            <img src="img/icons8-hamburger-menu.svg" alt="">
        </div>
        <nav id="nav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php"><u>Contact</u></a>
            <a href="gallery.php">Gallery</a>
        </nav>


        <h3>Nephin Media | Contact</h3>
        <img src="img/nephin.svg" class="logo-small" alt="Website logo">
    </header>

    <nav class="hamburger-menu" id="hamburger-menu" style="display: none;">
        <a href="index.php">•Home</a>
        <a href="about.php">•About</a>
        <a href="contact.php">•<u>Contact</u></a>
        <a href="gallery.php">•Gallery</a>
    </nav>

    <main>
        <form action="contact.php" method="post" class="contact-form">
            <h2>Contact Us</h2>
            <p>
                Need to find out some more about what I could do for you?
                Need help with something? Send me a message!
            </p>
            <p>If you'd like, you can also email me at: <a href="mailto:iarla@nephin.me">iarla@nephin.me</a></p>
            <label for="name"><b>Name*:</b></label>
            <input type="text" id="name" name="name" required>
            <label for="email"><b>Email*:</b></label>
            <input type="text" id="email" name="email" required>
            <label for="Submission Type"><b>Submission Type:</b></label>
            <select id="submission_type" name="submission_type" required>
                <option value="booking">Booking</option>
                <option value="contact">Contact</option>
                <option value="support">Support</option>
            </select>
            <label for="message"><b>Message*:</b></label>
            <textarea id="message" name="message" rows="10" maxlength="1000" required></textarea>
            <input type="submit" value="Submit">
            <p>Required fields are marked with an asterisk (*).</p>
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
    <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>