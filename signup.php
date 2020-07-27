<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💻 | Sign Up</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
        import swal from 'sweetalert';
    </script>
</head>

<body>
    <div class="signup-div">
        <div class="logo">
            <img src="logo.png" alt="logo" width=100 height=100>
        </div>
        <div class="title">SignUp</div>

        <!-- fields -->
        <form action="signup.php" method="post">
            <div class="signupfields">
                <div class="username">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="name" class="browser-default user-input" placeholder="Enter name">
                </div>
                <div class="username">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" class="browser-default user-input" placeholder="Enter Email">
                </div>
                <div class="password">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" class="browser-default password-input" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn waves-effect waves-light white-text signin-button" name="signupButton">SignUp</button>
        </form>
        <div class="signup-link">
            <p>Already have an Account!! <a href="index.php">Log In</a></p>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>


<?php
session_start();
if (isset($_SESSION['user_enter'])) {
    header("Location:dashboard.php");
}


$con = mysqli_connect("localhost", "root", "", "feedbyme");

if (mysqli_connect_errno()) {
    echo "Failed to Connect: " . mysqli_connect_error();
}

//TODO: Declaring variables to prevent error


if (isset($_POST['signupButton'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($name == '' and $email == '' and $password == '') {
        echo "<script>swal(\"Kindly Fill the form\", \"All fields must be filled\", \"warning\");</script>";
    } else if ($name == '') {
        echo "<script>swal(\"Kindly Fill name\", \"\", \"warning\");</script>";
    } else if ($email == '') {
        echo "<script>swal(\"Kindly Fill email\", \"\", \"warning\");</script>";
    } else if ($password == '') {
        echo "<script>swal(\"Kindly Fill Password\", \"\", \"warning\");</script>";
    } else {
        $query = mysqli_query($con, "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')");
        echo "<script>swal(\"Congratulation!\", \"You signed up successfully!\", \"success\");</script>";
    }
}


?>