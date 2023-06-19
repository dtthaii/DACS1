<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username ='$usernameemail' OR email='$usernameemail' ");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: mainpage.php");
        } else {
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    } else {
        echo
        "<script> alert('User Not Sign Up'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="signin.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
</head>

<body>
    <section class="main">
        <div class="login__container">
            <div class="title">WELCOME BACK</div>
            <p class="welcome-message">Please enter your detail</p>
            <form class="login" action="" method="post" autocomplete="off">
                <div class="form__control">
                    <input type="text" name="usernameemail" id="usernameemail" required value="" placeholder="Username or Email">
                    <input type="password" name="password" id="password" required value="" placeholder="Password">
                </div>
                <div class="login__function">
                    <div class="marterial-checkbox">
                        <input id="remember-checkbox" class="remember-checkbox" type="checkbox">
                        <label for="remember-checkbox">Remember me</label>
                    </div>
                    <a href="#">Forgot Password</a>
                </div>
                <div class="login__buttons">
                    <button type="submit" name="submit" class="login">Log In</button>
                    <button class="another"> <i class="bx bxl-facebook-circle"></i> Log in with Facebook</button>
                    <button class="another gg"><i class="bx bxl-google"></i> Log in with Google</button>
                </div>
                <span class="signin__label">
                    Don't have an account? <a href="signup.php">Sign up for FREE</a>
                </span>
            </form>
            <div class="login__bottom">
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
    </section>
    <section class="side">
        <img src="/CRYPTO FINANCE/image/dacs3.png" alt="" />
    </section>
</body>

</html>