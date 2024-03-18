<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        footer {
            margin-top: auto;
            width: 100%;
            text-align: center;
            background-color: #f2f2f2;
            padding: 1px;
        }

        .flexcontent {
            margin: 0 auto;
            margin-top: 15px;
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .flexitem {
            min-height: 280px;
            flex-wrap: wrap;
            min-width: 40%;
            margin: 20px;
            padding: 20px;
            text-align: center;
            background-color: #f2f2f2;
            border: 1px solid black;
        }

        .flexitem img {
            width: 380px;
            height: auto;
        }
    </style>
</head>

<body>
    <div id="logogradient"></div>
    <div class="logo">
        <img src="img/nephin_transp.png" height="120px" alt="">
    </div>
    <div class="home_spread">
        <header>
            <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="gallery.php">Gallery</a>
            </nav>
        </header>
    </div>
</body>

</html>