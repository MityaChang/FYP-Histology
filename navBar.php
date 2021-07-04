<?php
include_once 'dbFunctions.php';
session_start();
if (!(isset($_SESSION['email']))) {
    header("location:login.php");
} else {
    $email = $_SESSION['email'];
    include_once 'dbFunctions.php';
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-cus" id="navigation">
    <a class="navbar-brand" href="#">
        <img class="rplogo" src="img/RP-Logo.png" alt=""/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    </button>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a class="" href="HomePage.php"><i class="bi bi-house-fill"></i>Home</a></li>
        <li><a href="GalleryPage.php"><i class="bi bi-stack"></i>Slides</a></li>
        <li><a href="QuizHomePage.php"><i class="bi bi-clipboard-check"></i>Quiz</a></li>
        <li><a href="Feedback.php"><i class="bi bi-archive-fill"></i>Feedback</a></li>
    </ul>
    
    <ul class=" ml-auto">
        <li  class="nav-item"> <a class="nav-link" href="logoutUser.php"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout/<?php echo $email ?></a></li>
    </ul>
</nav>

