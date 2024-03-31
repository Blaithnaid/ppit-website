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
        #videocontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
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
        <h4>Nephin Media | Gallery</h4>
        <div class="logonav">
            <img src="img/nephin_transp.png" height="50px" alt="">
        </div>
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
