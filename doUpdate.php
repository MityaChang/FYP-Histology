<?php
include_once 'dbFunctions.php';
session_start();
$email = $_SESSION['email'];

if (isset($_POST)) {
    $question = $_POST['question1'];
    echo $question;
}
?>