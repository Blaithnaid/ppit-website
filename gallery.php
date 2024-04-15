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

    <title>Nephin Media | Gallery</title>
    <link rel="stylesheet" href="img/lightbox/src/css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        header nav {
            margin-right: 15px;
        }

        .body-flex {
            width: 100%;
        }

        .gallery-flex {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
        }

        figure {
            flex-basis: 40%;
            margin: 10px;
            text-align: center;
        }

        figure img {
            aspect-ratio: 4/3;
            width: 100%;
            height: 2fr;
            object-fit: cover;
            border-radius: 10px;
        }

        figcaption {
            font-size: 0.8em;
            color: #666;
        }

        iframe {
            width: 100%;
            height: 100%;
            aspect-ratio: 4/3;
            border-radius: 10px;
        }

        @media screen and (max-width: 800px) {
            figure {
                flex-basis: 90%;
            }
        }
    </style>
    <link rel="stylesheet" href="css/menu.css">
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
        <img src="img/nephin.svg" class="logo-small" alt="Website logo">
    </header>

    <nav class="hamburger-menu" id="hamburger-menu" style="display: none;">
        <a href="index.php">•Home</a>
        <a href="about.php">•About</a>
        <a href="contact.php">•Contact</a>
        <a href="gallery.php">•Gallery</a>
    </nav>

    <div class="body-flex">
        <div class="gallery-flex">
            <figure>
                <a href="img/gallery/shop-street.jpg" data-lightbox="gallery"><img src="img/gallery/shop-street.jpg"
                        alt="Shop Street in Galway at night"></a>
                <figcaption>Captured on: Canon EOS 250D</figcaption>
            </figure>
            <figure>
                <a href="img/gallery/salthill-sunset.jpg" data-lightbox="gallery"><img
                        src="img/gallery/salthill-sunset.jpg" alt="Salthill in Galway at sunset"></a>
                <figcaption>Captured on: Canon EOS 250D</figcaption>
            </figure>
            <figure>
                <a href="img/gallery/misty-lake.jpg" data-lightbox="gallery"><img src="img/gallery/misty-lake.jpg"
                        alt=""></a>
                <figcaption>Captured on: Canon IXUS 70</figcaption>
            </figure>
            <figure>
                <a href="img/gallery/ambulance.jpg" data-lightbox="gallery"><img src="img/gallery/ambulance.jpg"
                        alt=""></a>
                <figcaption>Captured on: Canon EOS 250D</figcaption>
            </figure>
            <figure>
                <a href="img/gallery/cloudy-lake.jpg" data-lightbox="gallery"><img src="img/gallery/cloudy-lake.jpg"
                        alt=""></a>
                <figcaption>Captured on: Canon IXUS 70</figcaption>
            </figure>
            <figure>
                <a href="img/gallery/salthill-night.jpg" data-lightbox="gallery"><img
                        src="img/gallery/salthill-night.jpg" alt=""></a>
                <figcaption>Captured on: Canon EOS 250D</figcaption>
            </figure>
            <figure>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/lSviicQG97Q?si=VlzX3beyEvEQ2zzD"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <figcaption>Short film made in Adobe Premiere</figcaption>
            </figure>
            <figure>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Wn0uN12Ybu0?si=B_kD9zwfhOcSkQMI"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <figcaption>Music Video made in Adobe Premiere</figcaption>
            </figure>
        </div>
    </div>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="img/lightbox/src/js/lightbox.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>