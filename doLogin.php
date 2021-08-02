<?php

if (isset($_POST["submit"])) {

    $username = $_POST["login"];
    $pass = $_POST["password"];

    require_once 'dbFunctions.php';
    require_once 'functions.php';

    if (emptyIpnutLogin($username, $pass) != false) {
       echo "<script type='text/javascript'>alert('Please enter your username/email and password!'); window.location.href='login.php';</script>";
        exit();
    }
    loginUser($link, $username, $pass);
} else {
     echo "<script type='text/javascript'>alert('Authentication failed, please try again with the correct login information!'); window.location.href='login.php';</script>";
    exit();
}
?>
