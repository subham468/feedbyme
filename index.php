<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏠 | Log In</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
        import swal from 'sweetalert';
    </script>
</head>


<body>

    <div class="login-div">
        <div class="logo">
            <img src="logo.png" alt="logo" width=100 height=100>
        </div>
        <div class="title">LogIn</div>


        <!-- fields -->
        <form action="" method="post">
            <div class="fields">
                <div class="username">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" class="browser-default user-input" placeholder="Enter Email">
                </div>
                <div class="password">
                    <ion-icon name="lock-open-outline"></ion-icon>
                    <input type="password" name="password" class="browser-default password-input" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn waves-effect waves-light white-text signin-button" name="loginButton">LogIn</button>
        </form>
        <div class="link">
            <a href="#">Forgot Password? </a> or <a href="signup.php">Sign up</a>
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

if (isset($_REQUEST['error'])) {
    echo "<script>
        swal('We tried our best to make it Secure. 😁','Thanks for Your Time!!','info')
        var delayInMilliseconds = 3000;
                        setTimeout(function() {
                            window.open('index.php','_self');
                        }, delayInMilliseconds);
        </script>";
}

$con = mysqli_connect("localhost", "root", "", "feedbyme");

if (mysqli_connect_errno()) {
    echo "Failed to Connect: " . mysqli_connect_error();
}

//TODO: Declaring variables to prevent error





if (isset($_POST['loginButton'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '' && $password == '') {
        echo "<script>swal(\"Kindly Fill the form\", \"All fields must be filled\", \"warning\");</script>";
    } else {
        $query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        $check_login_query = mysqli_num_rows($query);

        if ($check_login_query == 1) {
            $_SESSION['user_enter'] = $email;

            echo "<script>swal(\"Good job!\", \"You logged in successfully!\", \"success\");</script>";
            header('Location:dashboard.php');
        } else {
            echo "<script>swal(\"Doesn't Match\", \"Please Fill Valid info\", \"error\");</script>";
        }
    }
}


?>