<?php

if (isset($_POST["submit"])) {

    $username = $_POST["login"];
    $pass = $_POST["password"];

    require_once 'dbFunctions.php';
    require_once 'functions.php';

    if (emptyIpnutLogin($username, $pass) != false) {
        header("location: login.php?error=emptyinput");
        exit();
    }

    loginUser($link, $username, $pass);
} else {
    header("location: HomePage.php");
    exit();
}
?>