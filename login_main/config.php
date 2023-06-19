<?php
session_start();
$servername = "localhost";
$database = "signinup";
$username = "username";
$password = "password";
$conn = mysqli_connect($servername, $username, $password, $database);