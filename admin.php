<?php
include_once "functions.php";
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

$conn = createConnection();

$result = $conn->query("SELECT * FROM `submissions`");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        $id = $_POST["delete"];
        $conn->query("DELETE FROM `submissions` WHERE `id` = $id");
    } elseif (isset($_POST["toggleAdmin"])) {
        $username = $_POST["toggleAdmin"];
        if ($username == $_SESSION["username"]) {
            echo "<script>alert('You cannot change your own admin status.');</script>";
        }
        $conn->query("UPDATE `users` SET `isAdmin` = NOT `isAdmin` WHERE `username` = '$username'");
    }
}
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

    <title>Nephin Media | Admin Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/icon-192x192.png">
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
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            height: 100vh;
            background-image: url("img/lockscreen.png");
            background-position: center;
            background-size: cover;
        }

        main div {
            flex-basis: 50%;
            height: 80%;
            max-width: 45%;
            overflow: auto;
            background-color: rgba(255, 255, 255, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid black;
        }

        th {
            /* text-align: left; */
            background-color: #f2f2f2;
        }

        tr,
        th,
        td {
            border: 1px solid black;
            padding: 10px 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #f5f5f5;
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
        <div id="results">
            <h1>Submissions</h1>
            <table>
                <tbody>
                    <tr>
                        <th>Submission Type</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["submission_type"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["message"] . "</td>";
                            echo "<td><form method='post' action='admin.php'><input type='hidden' name='delete' value='" . $row["id"] . "'><input type='submit' value='Delete'></form></td>";
                            // echo a 'reply' button with a mailto link for the email address submitted
                            echo "<td><a href='mailto:" . $row["email"] . "'><input type='submit' value='Reply'></a></td>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No submissions found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="users">
            <h3>Users</h3>
            <table>
                <tbody>
                    <tr>
                        <th>Username</th>
                        <th>Admin</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["isAdmin"] . "</td>";
                            echo "<td><form method='post' action='admin.php'><input type='hidden' name='delete' value='" . $row["username"] . "'><input type='submit' value='Delete'></form></td>";
                            echo "<td><form method='post' action='admin.php'><input type='hidden' name='toggleAdmin' value='" . $row["username"] . "'><input type='submit' value='Toggle Admin'></form></td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Nephin Media
        </p>
    </footer>
</body>

</html>