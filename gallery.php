<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        header nav {
            margin-right: 15px;
        }

        #videocontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
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
        <h3>Nephin Media | Gallery</h3>
        <img src="img/nephin.svg" height="60px" alt="">
    </header>
    <div class="body-flex">
        <div class="imagegrid">
        </div>
        <div id='videocontainer'>
            <video height='400px' width='400px' autoplay>
                <source src="img/logo_animated.mp4" type="video/mp4">
                Your browser does not support the video tag.
        </div>
        <div>
</body>

</html>