<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Nephin Media | Gallery</title>
    <link rel="stylesheet" href="img/lightbox/src/css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        header nav {
            margin-right: 15px;
        }

        .body-flex {
            min-height: 75vh;
        }

        .gallery-flex {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
        }

        figure {
            margin: 10px;
            text-align: center;
        }

        .gallery-flex img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
        }

        iframe {
            width: 300px;
            height: 300px;
            border-radius: 10px;
        }

        figcaption {
            margin-top: 0;
            font-size: 0.8em;
            font-weight: bold;
            color: grey;
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
        <div class="gallery-flex">
            <figure>
                <a href="img/gallery/shop-street.jpg" data-lightbox="gallery"><img src="img/gallery/shop-street.jpg"
                        alt="Shop Street in Galway at night"></a>
                <figcaption>Shop Street in Galway at night</figcaption>
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
</body>

</html>