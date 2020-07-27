<?php
session_start();
if (!isset($_SESSION['user_enter'])) {
    header("Location:index.php?error=true");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subham's Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

</head>

<body>

    <!-- TODO: Social Media-->
    <div class="fixed-action-btn">
        <a href="https://api.whatsapp.com/send?phone=917975437078" target="_blank" class="btn-large  btn-floating pulse teal">
            <img src="whatapp.svg" alt="" style="margin: 8px;">
        </a>
    </div>
    <nav class="blue">
        <div class="container">
            <img src="logo.png" alt="" width=60>
            <a href="logout.php" class="right flow-text white-text">👈 Log Out</a>
        </div>
    </nav>
    <h2 class="red-text" style="margin-top:5px;">Welcome to my Portfolio</h2>

    <blockquote class="purple-text flow-text">
        I'm Subham Paul, born and brought up in India. I'm Web developer, designer also enthusiast in Mobile development.
    </blockquote>

    <blockquote>
        <p class="flow-text pink-text">
            Website: <a href="http://bit.ly/subham468" class="blue-text " target="_blank">click me 👉 http://bit.ly/subham468</a>
        </p>
    </blockquote>
    <blockquote>
        <p class="flow-text pink-text">
            Created Free Tool: <a href="https://bit.ly/resrc" class="blue-text " target="_blank">click me 👉 https://bit.ly/resrc</a>
        </p>
    </blockquote>
    <blockquote>
        <p class="flow-text pink-text">
            Instructor at Memento Classes: <a href="https://bit.ly/mementoclasses" class="blue-text " target="_blank">click me 👉 https://bit.ly/mementoclasses</a>
        </p>
    </blockquote>


    <div class="section">
        <blockquote class="pink-text flow-text">
            Connect with Social media
        </blockquote>
    </div>
    <div class="row">
        <div class="col l2">

            <a href="https://github.com/subham468" class="black-text" target="_blank">
                <h3 class="center">
                    <ion-icon name="logo-github"></ion-icon>
                </h3>
            </a>
        </div>
        <div class="col l2">

            <a href="https://www.linkedin.com/in/subham-paul-32744813a/" class="blue-text" target="_blank">
                <h3 class="center blue-text">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </h3>
            </a>

        </div>
        <div class="col l2">

            <a href="mailto:paulsubham100@gmail.com?&subject=More%20info%20about%20Memento%20Classes&body=Welcome%20to%20Memento%20Classes%20|The%20Classes%20for%20Learners 😊😊!!%20How%20can%20I%20help%20You?" class="blue-text" target="_blank">
                <h3 class="center red-text">
                    <ion-icon name="mail-outline"></ion-icon>
                </h3>
            </a>

        </div>
        <div class="col l2">
            <a class="light-green-text text-accent-3" href="tel:+917975437078" target="_blank">
                <h3 class="center">
                    <ion-icon name="call-outline"></ion-icon>
                </h3>
            </a>
        </div>
        <div class="col l2">
            <a href="https://www.youtube.com/channel/UC54U2rosp_K1TAoykulHmDQ/playlists" target="_blank">
                <h3 class="center red-text">
                    <ion-icon name="logo-youtube"></ion-icon>
                </h3>
            </a>
        </div>
        <div class="col l2">
            <a href="http://bit.ly/mkd00468" target="_blank">
                <h3 class="center purple-text">
                    <ion-icon name="logo-instagram"></ion-icon>
                </h3>
            </a>
        </div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.fixed-action-btn').floatingActionButton();

        });
    </script>

</body>

</html>