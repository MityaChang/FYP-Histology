<?php

if (isset($_POST["submit"])) {

    $username = $_POST["login"];
    $pass = $_POST["password"];

    include 'dbFunctions.php';
    include 'functions.php';

    if (emptyIpnutLogin($username, $pass)) {
        header("location: login.php?error=emptyinput");
        exit();
    }

    loginUser($link, $username, $pass);
} else {
    header("location: HomePage.php");
    exit();
}
?>