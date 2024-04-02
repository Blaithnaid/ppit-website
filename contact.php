<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $query = "INSERT INTO `submissions` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Contact</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .logonav {
            align-self: flex-end;
            display: inline;
        }

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

        /* style the contact form */
        form {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-content: center;
            background-color: white;
            margin: 0 auto;
            width: 40%;
            height: 60vh;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        form input[type="text"],
        form textarea {
            width: 80%;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        <div class="logonav">
            <img src="img/nephin_transp.png" height="60px" alt="">
        </div>
    </header>
    <main>
        <form action="contact.php" method="post">
            <div>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
            </div>
            <div>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
            </div>
            <label for="message">Message:</label><br>
            <div>
                <textarea id="message" name="message"></textarea><br>
            </div>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
</body>

</html>