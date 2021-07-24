<?php
include_once 'dbFunctions.php';

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = $targetDir . basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

//  if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) 
//  {
//    $eid=@$_GET['eid'];
//    $sn=@$_GET['n'];
//    $total=@$_GET['t'];
//    $ans=$_POST['ans'];
//    $qid=@$_GET['qid'];
//    $q=mysqli_query($link,"SELECT * FROM answer WHERE qid='$qid' " );
//    while($row=mysqli_fetch_array($q) )
//    {  $ansid=$row['ansid']; }
//    if($ans == $ansid)
//    {
//      $q=mysqli_query($link,"SELECT * FROM quiz WHERE eid='$eid' " );
//      while($row=mysqli_fetch_array($q) )
//      {
//        $sahi=$row['sahi'];
//      }
//      if($sn == 1)
//      {
//        $q=mysqli_query($link,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
//      }
//      $q=mysqli_query($link,"SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');
//      while($row=mysqli_fetch_array($q) )
//      {
//        $s=$row['score'];
//        $r=$row['sahi'];
//      }
//      $r++;
//      $s=$s+$sahi;
//      $q=mysqli_query($link,"UPDATE `history` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');
//    } 
//    else
//    {
//      $q=mysqli_query($link,"SELECT * FROM quiz WHERE eid='$eid' " )or die('Error129');
//      while($row=mysqli_fetch_array($q) )
//      {
//        $wrong=$row['wrong'];
//      }
//      if($sn == 1)
//      {
//        $q=mysqli_query($link,"INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
//      }
//      $q=mysqli_query($link,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error139');
//      while($row=mysqli_fetch_array($q) )
//      {
//        $s=$row['score'];
//        $w=$row['wrong'];
//      }
//      $w++;
//      $s=$s-$wrong;
//      $q=mysqli_query($link,"UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
//    }
//    if($sn != $total)
//    {
//      $sn++;
//      header("location:welcome.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
//    }
//    else if( $_SESSION['key']!='suryapinky')
//    {
//      $q=mysqli_query($link,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error156');
//      while($row=mysqli_fetch_array($q) )
//      {
//        $s=$row['score'];
//      }
//      $q=mysqli_query($link,"SELECT * FROM rank WHERE email='$email'" )or die('Error161');
//      $rowcount=mysqli_num_rows($q);
//      if($rowcount == 0)
//      {
//        $q2=mysqli_query($link,"INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
//      }
//      else
//      {
//        while($row=mysqli_fetch_array($q) )
//        {
//          $sun=$row['score'];
//        }
//        $sun=$s+$sun;
//        $q=mysqli_query($link,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
//      }
//      header("location:welcome.php?q=result&eid=$eid");
//    }
//    else
//    {
//      header("location:welcome.php?q=result&eid=$eid");
//    }
//  }


?>



