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
        <li><a href="welcome.php?q=1"><i class="bi bi-clipboard-check"></i>Quiz</a></li>
        <li><a href="Feedback.php"><i class="bi bi-archive-fill"></i>Feedback</a></li>
    </ul>

    <ul class=" ml-auto">
        <li  class="nav-item"> <button type="button" tabindex="0" class="dropdown-item"><i class="bi bi-person"></i>Admin Account</button></li>

        <li  class="nav-item"> <a class="nav-link" href="logoutUser.php"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout/<?php echo $email ?></a></li>
    </ul>
    
    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-100px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
        <button type="button" tabindex="0" class="dropdown-item"><i class="bi bi-person"></i>Admin Account</button>
        <div tabindex="-1" class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout1.php?q=dashboard.php"><i class="bi bi-box-arrow-right"></i>&nbsp;Log out</a></li>

    </div>
</nav>

