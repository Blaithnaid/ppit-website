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
        main {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: stretch;
        }

        main>div {
            flex-basis: 50%;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
        }

        h2 {
            font-size: 2em;
        }

        p {
            font-size: 1.2 em;
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
            padding: 10px 2%;
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
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header>
        <div class="hamburger-toggle" onclick="toggleMenu()">
            <img src="img/icons8-hamburger-menu.svg" alt="">
        </div>
        <nav id="nav">
            <a href="index.php">Home</a>
            <a href="about.php"><u>About</u></a>
            <a href="contact.php">Contact</a>
            <a href="gallery.php">Gallery</a>
        </nav>
        <h3>Nephin Media | About</h3>
        <img src="img/nephin.svg" class="logo-small" alt="Website logo">
    </header>

    <nav class="hamburger-menu" id="hamburger-menu" style="display: none;">
        <a href="index.php">•Home</a>
        <a href="about.php">•<u>About</u></a>
        <a href="contact.php">•Contact</a>
        <a href="gallery.php">•Gallery</a>
    </nav>

    <main>
        <div class="image-grid">
            <img src="img/about/img1.png" id="img1" alt="Code in an IDE">
            <img src="img/about/img2.png" id="img2" alt="A 3D Model in Blender">
            <img src="img/about/img3.png" id="img3" alt="An Adobe Premiere project">
        </div>
        <div class="text-flex">
            <h1>About Nephin Media</h1>
            <p>
            <section>
                <h2>Who are we?</h2>
                <p>
                    Nephin Media is the product of me - Iarla Sparrow Burke. Raised in a strongly tech-literate
                    household,and carrying a passion for technology and media, I'm looking to bring my skills in the
                    fields I'm passionate about to those who need them.
                </p>
            </section>
            <section>
                <h2>What do we do?</h2>
                <p>
                    Nephin Media is a multimedia production company, specialising in web development, 3D modelling, and
                    video editing. I'm here to help you bring your ideas to life, whether it's a website, a 3D model,
                    or a video project.
                </p>
            </section>
            <section>
                <h2>Why choose us?</h2>
                <p>
                    Nephin Media is a small, independent company, meaning that I can offer a personal touch to my
                    services. I'm dedicated to providing the best possible service to our clients, and always
                    looking to improve my skills and services.
                </p>
            </section>
            <section>
                <h2>Now, how can we help?</h2>
                <p>
                    If you're interested in working with me, or if you have any questions, feel free to get in touch
                    with me via the <a href="contact.php">Contact</a> page, or at <a
                        href="mailto:iarla@nephin.me">iarla@nephin.me</a>. We're always happy to help, and we're
                    looking forward to working with you!
                </p>
        </div>
    </main>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
    <script type="text/javascript" src="js/functions.js"></script>
</body>

</html>