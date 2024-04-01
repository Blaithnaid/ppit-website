<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | About</title>
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

        .body-flex {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: center;
            height: 100vh;
        }

        .body-flex>div {
            margin: 0;
            width: 50%;
            height: 100%;
        }

        .image-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            justify-content: center;
            align-items: center;
        }

        .image-grid div {
            width: 100%;
            height: 100%;
        }

        #img1 {
            background-image: url("img/about/img1.png");
            background-size: cover;
            background-position: center;
            grid-column: 1 / 2;
            grid-row: 1 / 3;
        }

        #img2 {
            background-image: url("img/about/img2.png");
            background-size: cover;
            background-position: center;
            grid-column: 2 / 3;
            grid-row: 1 / 2;
        }

        #img3 {
            background-image: url("img/about/img3.png");
            background-size: cover;
            background-position: center;
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }

        .text-flex {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media screen and (max-width: 800px) {
            .body-flex {
                flex-direction: column;
            }

            .body-flex>div {
                width: 100%;
            }
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
        <h4>Nephin Media | About</h4>
        <div class="logonav">
            <img src="img/nephin_transp.png" height="50px" alt="">
        </div>
    </header>
    <div class="body-flex">
        <div class="image-grid">
            <div id="img1"></div>
            <div id="img2"></div>
            <div id="img3"></div>
        </div>
        <div class="text-flex">
            <h1>About Nephin Media</h1>
            <p>Nephin Media is a small web development company based in the west of Ireland. We specialise in creating
                websites for small businesses and individuals. We also offer a range of other services including logo
                design, branding, and social media management.</p>
        </div>
    </div>
    <footer>
        <p>&copy; Nephin Media 2021</p>
    </footer>
</body>

</html>