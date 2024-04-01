<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
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
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f2f2f2;
        }
        header nav {
            margin-right: 15px;
        }
    </style>
</head>

<body>
    <!-- <div id="logogradient"></div> -->
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
</body>

</html>
