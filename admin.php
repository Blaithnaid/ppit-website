<?php
include_once "functions.php";
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Admin Dashboard</title>
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
        <h3>Nephin Media | Admin Dashboard</h3>
        <img src="img/nephin.svg" height="60px" width="60px" alt="">
    </header>
    <main>

    </main>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
</body>

</html>