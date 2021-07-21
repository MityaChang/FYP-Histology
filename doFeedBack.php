<?php


include("dbFunctions.php");

$subject = $_POST['subject'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $query = "INSERT INTO feedback(subject,name, email, comments) 
          VALUES 
          ('$subject','$name','$email','$comments')";
  
} 
else {
    echo "<script type='text/javascript'>alert('Please reenter your email'); window.location.href='Feedback.php';</script>";
    exit();
    
   
}

$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    echo "<script type='text/javascript'>alert('Thank you for your feedback'); window.location.href='Feedback.php';</script>";
//    header("location: Feedback.php");
    exit();
} else {

    echo "<script type='text/javascript'>alert('Please reenter your feedback'); window.location.href='Feedback.php';</script>";

    exit();
}


?>
