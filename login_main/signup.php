<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpasswprd = $_POST["repeatpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$username' OR email='$email' ");

    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    } else {
        if ($password == $repeatpasswprd) {
            $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Sign Up Successfull'); </script>";
        } else {
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signup.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <section class="side">
        <img src="/CRYPTO FINANCE/image/dacs3.png" alt="">
    </section>
    <section class="main">
        <div class="signup__container">
            <div class="title">WELCOME to BLOCKVERSE</div>
            <p class="welcome-message">Create your account</p>
            <form class="" action="" method="post" autocomplete="off">

                <div class="form__control">

                    <input type="text" name="name" id="name" required value="" placeholder="Name">
                    <input type="text" name="username" id="username" required value="" placeholder="Username">
                    <input type="email" name="email" id="email" required value="" placeholder="Email">
                    <input type="password" name="password" id="password" required value="" placeholder="Password">
                    <input type="repeatpassword" name="repeatpassword" id="repeatpassword" required value="" placeholder="Repeat Password">
                </div>
                <div class="signup__function">
                    <div class="marterial-checkbox">
                        <input id="remember-checkbox" class="remember-checkbox" type="checkbox">
                        <label for="remember-checkbox">Remember me for 30 days</label>
                    </div>
                </div>
                <div class="signup__button">
                    <button type="submit" name="submit" class="signup">Create an account</button>
                </div>
                <div class="signup__withsth">
                    Sign In With <a href="#"><i class='bx bxl-facebook-square'></i><i class='bx bxl-google'></i></a>
                </div>
                <span class="login__label">
                    Already have an account? <a href="login.php">Log in HERE</a>
                </span>
            </form>
            <div class="signup__bottom">
                <div class="media__icons">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-youtube"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-linkedin-square"></i></a>
                </div>
                <p>Copyright © 2023 <a href="#">Blockverse</a></p>
            </div>
        </div>
        </div>
    </section>
</body>

</html>