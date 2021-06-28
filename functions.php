<?php

function emptyIpnutSignup($email, $name, $pass, $passwordRepeat) {
    $result;
    if (empty($email) || empty($name) || empty($pass) || empty($passwordRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pass, $passwordRepeat) {
    $result;
    if ($pass !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($link, $name, $email) {
    $sql = "SELECT * FROM users WHERE userName  = ? OR userEmail  = ?;";
    $stmt = mysqli_stmt_init($link);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: HomePage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($link, $email, $name, $pass) {
    $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($link);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: HomePage.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $name, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: HomePage.php");
    exit();
}

//Login Function
function emptyIpnutLogin($username, $pass) {
    $result;
    if (empty($username) && empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($link, $username, $pass) {
    $uidExists = uidExists($link, $username, $username);
    if ($uidExists == false) {
        header("Location: login.php?error=wronglogins");
    }
    $pwdHashed = $uidExists["userPass"];
    $checkPwd = password_verify($pass, $pwdHashed);
    if ($checkPwd == false) {
        header("Location: login.php?error=stmtfailed?error=wrongloginf");
        exit();
    } else if ($checkPwd == true) {
        session_start();
        $_SESSION["username"] = $uidExists["userEmail"];
        $_SESSION["email"] = $uidExists["userName"];
        header("Location: HomePage.php");
        exit();
    }
}
    
//    $query = "select * from users where users where userName = '$username' and userPass = '".password_hash($pass, PASSWORD_DEFAULT)."'";
//    $result = mysqli_query($link, $query);
//    if (empty($result)) {
//        echo $query;
//    } else {
//        foreach ($result as $i) {
//            session_start();
//            $_SESSION['email'] = $i['userEmail'];
//            $_SESSION['username'] = $i['userName'];
//        } 
//    }
//}

?>
