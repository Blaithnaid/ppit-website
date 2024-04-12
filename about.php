<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
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

    <title>Nephin Media | About</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        header {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        header nav {
            margin-right: 15px;
        }

        main {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: stretch;
            /* Add this line */
        }

        main>div {
            flex-basis: 50%;
        }

        .image-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 15px;
            margin: 10px;
            justify-content: center;
            align-items: stretch;
            height: 100vh;
            flex-basis: 60%;
        }

        .image-grid img {
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;
            height: auto;
            width: 100%;
            object-fit: cover;
        }

        #img1 {
            grid-area: 1 / 1 / 3 / 2;
        }

        #img2 {
            grid-area: 1 / 2 / 2 / 3;
        }

        #img3 {
            grid-area: 2 / 2 / 3 / 3;
        }

        .text-flex {
            flex-basis: 40%;
            background-color: lightgrey;
            padding: 10px;
        }

        /* breakpoint for mobile */
        @media screen and (max-width: 800px) {
            main {
                flex-direction: column;
            }

            main>div {
                flex-basis: 100%;
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
        <h3>Nephin Media | About</h3>
        <img src="img/nephin.svg" height="60px" alt="">
    </header>
    <main>
        <div class="image-grid">
            <img src="img/about/img1.png" id="img1" alt="Code in an IDE">
            <img src="img/about/img2.png" id="img2" alt="A 3D Model in Blender">
            <img src="img/about/img3.png" id="img3" alt="An Adobe Premiere project">
        </div>
        <div class="text-flex">
            <h1>About Nephin Media</h1>
            <p>Nephin Media is a small web development company based in the west of Ireland. We specialise in creating
                websites for small businesses and individuals. We also offer a range of other services including logo
                design, branding, and social media management.</p>
        </div>
    </main>
    <footer>
        <p>&copy; Nephin Media 2021</p>
    </footer>
</body>

</html>