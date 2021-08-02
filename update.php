<?php

include_once 'dbFunctions.php';
session_start();
$email = $_SESSION['email'];

if (isset($_SESSION['key'])) {
    if (@$_GET['demail'] && $_SESSION['key'] == 'admin') {
        $demail = @$_GET['demail'];
        $r1 = mysqli_query($link, "DELETE FROM rank WHERE email='$demail' ") or die('Error');
        $r2 = mysqli_query($link, "DELETE FROM history WHERE email='$demail' ") or die('Error');
        $result = mysqli_query($link, "DELETE FROM users WHERE userName='$demail' ") or die('Error');
        header("location:dashboard.php?q=1");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'rmquiz' && $_SESSION['key'] == 'admin') {
        $eid = @$_GET['eid'];
        $result = mysqli_query($link, "SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
        while ($row = mysqli_fetch_array($result)) {
            $qid = $row['qid'];
            $r1 = mysqli_query($link, "DELETE FROM options WHERE qid='$qid'") or die('Error');
            $r2 = mysqli_query($link, "DELETE FROM answer WHERE qid='$qid' ") or die('Error');
        }
        $r3 = mysqli_query($link, "DELETE FROM questions WHERE eid='$eid' ") or die('Error');
        $r4 = mysqli_query($link, "DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
        $r4 = mysqli_query($link, "DELETE FROM history WHERE eid='$eid' ") or die('Error');
        header("location:dashboard.php?q=5");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'upquiz' && $_SESSION['key'] == 'admin') {
        $eid = @$_GET['eid'];
        $result = mysqli_query($link, "SELECT * FROM questions WHERE eid='$eid' ") or die('Error');
        while ($row = mysqli_fetch_array($result)) {
            $qid = $row['qid'];
            $r1 = mysqli_query($link, "DELETE FROM options WHERE qid='$qid'") or die('Error');
            $r2 = mysqli_query($link, "DELETE FROM answer WHERE qid='$qid' ") or die('Error');
        }
        $r3 = mysqli_query($link, "DELETE FROM questions WHERE eid='$eid' ") or die('Error');
        $r4 = mysqli_query($link, "DELETE FROM quiz WHERE eid='$eid' ") or die('Error');
        $r4 = mysqli_query($link, "DELETE FROM history WHERE eid='$eid' ") or die('Error');
        header("location:dashboard.php?q=5");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'addquiz' && $_SESSION['key'] == 'admin') {
        $name = $_POST['name'];
        $name = ucwords(strtolower($name));
        $total = $_POST['total'];
        $sahi = $_POST['right'];
        $wrong = $_POST['wrong'];
        $id = uniqid();
        $q3 = mysqli_query($link, "INSERT INTO quiz VALUES  ('$id','$name' , '$sahi' , '$wrong','$total', NOW())");
        header("location:dashboard.php?q=4&step=2&eid=$id&n=$total");
    }
}

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'addqns' && $_SESSION['key'] == 'admin') {
        $n = @$_GET['n'];
        $eid = @$_GET['eid'];
        $ch = @$_GET['ch'];
        $targetDir = "uploads/";
        for ($i = 1; $i <= $n; $i++) {
            $qid = uniqid();
            $qns = $_POST['qns' . $i];
            $q3 = mysqli_query($link, "INSERT INTO questions VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");

            $targetFilePath = $targetDir . basename($_FILES["file$i"]["name"]);
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            $statusMsg = '';
            if (!empty($_FILES["file$i"]["name"])) {
                // Allow certain file formats
                $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
                if (in_array($imageFileType, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["file$i"]["tmp_name"], $targetFilePath)) {
                        // Insert image file name intoatabase
                        $insert = $link->query("INSERT into images (file_name, uploaded_on, qid) "
                                . "VALUES ('" . $targetFilePath . "', NOW(), '$qid')");
                        if ($insert) {
                            $statusMsg = "The file " . $targetFilePath . " has been uploaded successfully.";
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

            $oaid = uniqid();
            $obid = uniqid();
            $ocid = uniqid();
            $odid = uniqid();
            $a = $_POST[$i . '1'];
            $b = $_POST[$i . '2'];
            $c = $_POST[$i . '3'];
            $d = $_POST[$i . '4'];
            $qa = mysqli_query($link, "INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
            $qb = mysqli_query($link, "INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
            $qc = mysqli_query($link, "INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
            $qd = mysqli_query($link, "INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
            $e = $_POST['ans' . $i];
            switch ($e) {
                case 'a': $ansid = $oaid;
                    break;
                case 'b': $ansid = $obid;
                    break;
                case 'c': $ansid = $ocid;
                    break;
                case 'd': $ansid = $odid;
                    break;
                default: $ansid = $oaid;
            }
            $qans = mysqli_query($link, "INSERT INTO answer VALUES  ('$qid','$ansid')");
        }


// File upload path
// Display status message
        echo $statusMsg;
        header("location:dashboard.php?q=0");
    }
}
//Student answering the quiz
if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
    $eid = @$_GET['eid'];
    $sn = @$_GET['n'];
    $total = @$_GET['t'];
    $ans = $_POST['ans'];
    $qid = @$_GET['qid'];
    $q = mysqli_query($link, "SELECT * FROM answer WHERE qid='$qid' ");
    while ($row = mysqli_fetch_array($q)) {
        $ansid = $row['ansid'];
    }
    if ($ans == $ansid) {
        $q = mysqli_query($link, "SELECT * FROM quiz WHERE eid='$eid' ");
        while ($row = mysqli_fetch_array($q)) {
            $sahi = $row['sahi'];
        }
        if ($sn == 1) {
            $q = mysqli_query($link, "INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW())")or die('Error');
        }
        $q = mysqli_query($link, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error115');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            $r = $row['sahi'];
        }
        $r++;
        $s = $s + $sahi;
        $q = mysqli_query($link, "UPDATE `history` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '$email' AND eid = '$eid'")or die('Error124');
    } else {
        $q = mysqli_query($link, "SELECT * FROM quiz WHERE eid='$eid' ")or die('Error129');
        while ($row = mysqli_fetch_array($q)) {
            $wrong = $row['wrong'];
        }
        if ($sn == 1) {
            $q = mysqli_query($link, "INSERT INTO history VALUES('$email','$eid' ,'0','0','0','0',NOW() )")or die('Error137');
        }
        $q = mysqli_query($link, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error139');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
            $w = $row['wrong'];
        }
        $w++;
        $s = $s - $wrong;
        $q = mysqli_query($link, "UPDATE `history` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '$email' AND eid = '$eid'")or die('Error147');
    }
    if ($sn != $total) {
        $sn++;
        header("location:welcome.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total")or die('Error152');
    } else if ($_SESSION['key'] != 'suryapinky') {
        $q = mysqli_query($link, "SELECT score FROM history WHERE eid='$eid' AND email='$email'")or die('Error156');
        while ($row = mysqli_fetch_array($q)) {
            $s = $row['score'];
        }
        $q = mysqli_query($link, "SELECT * FROM rank WHERE email='$email'")or die('Error161');
        $rowcount = mysqli_num_rows($q);
        if ($rowcount == 0) {
            $q2 = mysqli_query($link, "INSERT INTO rank VALUES('$email','$s',NOW())")or die('Error165');
        } else {
            while ($row = mysqli_fetch_array($q)) {
                $sun = $row['score'];
            }
            $sun = $s + $sun;
            $q = mysqli_query($link, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
        }
        header("location:welcome.php?q=result&eid=$eid");
    } else {
        header("location:welcome.php?q=result&eid=$eid");
    }
}

if (@$_GET['q'] == 'quizre' && @$_GET['step'] == 25) {
    $eid = @$_GET['eid'];
    $n = @$_GET['n'];
    $t = @$_GET['t'];
    $q = mysqli_query($link, "SELECT score FROM history WHERE eid='$eid' AND email='$email'")or die('Error156');
    while ($row = mysqli_fetch_array($q)) {
        $s = $row['score'];
    }
    $q = mysqli_query($link, "DELETE FROM `history` WHERE eid='$eid' AND email='$email' ")or die('Error184');
    $q = mysqli_query($link, "SELECT * FROM rank WHERE email='$email'")or die('Error161');
    while ($row = mysqli_fetch_array($q)) {
        $sun = $row['score'];
    }
    $sun = $sun - $s;
    $q = mysqli_query($link, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
    header("location:welcome.php?q=quiz&step=2&eid=$eid&n=1&t=$t");
}
?>



