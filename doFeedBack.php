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
    echo '<script>alert("Please enter a valid email")</script>';
    
   
}
if(empty($query)){
    echo '<script>alert("Please reenter your feedback")</script>';
    
   
}


$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = '<script>alert("Thank you for your feedback")</script>';
} else {
    echo '<script>alert("Please reenter your feedback")</script>';
}

echo $msg;

?>