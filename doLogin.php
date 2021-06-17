<?php

if (isset($_POST["submit"])) {

    $username = $_POST["login"];
    $pass = $_POST["password"];

    require_once 'dbFunctions.php';
    require_once 'functions.php';

    if (emptyIpnutLogin($username, $pass) !== false) {
        header("location: http://localhost/FYP-Histology/Home.html?error=emptyinput");
        exit();
    }

    loginUser($link, $username, $pass);
} else {
    header("location: http://localhost/FYP-Histology/Home.html");
    exit();
}
?>