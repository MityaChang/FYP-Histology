<?php

if (isset($_POST["submitBtn"])) {
    include "dbFunctions.php";
    $name = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $passwordRepeat = $_POST["confirmPassword"];
    require_once 'functions.php';
//    require_once 'dbFunctions.php';
    //Inputs empty
    if (emptyIpnutSignup($email, $name, $pass, $passwordRepeat) !== false) {
        header("location: Register.php?error=emptyinput");
        exit();
    }

    if (invalidUid($name) !== false) {
        header("location: Register.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: Register.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pass, $passwordRepeat) !== false) {
        header("location: Register.php?error=pwddontmatch");
        exit();
    }

    if (uidExists($link, $name, $email) !== false) {
        header("location: Register.php?error=usernametaken");
        exit();
    }

    createUser($link, $email, $name, $pass);
    header("Location: HomePage.php");
    exit();
} else {
    header("location: Register.php");
    exit();
}

//    if(emptyInputSignup($name,$email,$pass,$passwordRepeat)!==false){
//        header("location: ../Register.php?error=emptyinput");
//        exit();
//    }
//} else {
//    header("loaction: ../Register.php");
//}
?>


