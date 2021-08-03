<?php
include_once 'dbFunctions.php';
session_start();
$email = $_SESSION['email'];

if (isset($_POST)) {
    $total = $_GET['total'];
    $totalQuestion = $_GET['totalQues'];
    $eid = $_GET['eid'];
    $question = mysqli_query($link, "SELECT * FROM questions WHERE eid='$eid'") or die('QuestionError');
      while ($row = mysqli_fetch_array($question)) {
          $qid[] = $row['qid']; 
        }
        
     
 echo $total;
  for($j = 0; $j< $totalQuestion; $j++){
      $questions[] = $_POST['question'.$j];
       $answers[] = $_POST['ans'.$j];
       $optionquery = mysqli_query($link, "SELECT * FROM options WHERE qid='$qid[$j]'") or die('OptionError');
      while ($row = mysqli_fetch_array($optionquery)) {
          $optionid[] = $row['optionid']; 
        }
        $k = 0;
    for($i = 0; $i< $total; $i++){
       
//       if($i == $totalQuestion){
//             echo 'true'.$i; 
//           break;
//       }
         $options[] = $_POST['option'.$i];
        echo json_encode($options[$i]);
        echo json_encode($optionid[$i]);
     
         
        $updatequestion = mysqli_query($link, "UPDATE questions SET qns='$questions[$j]' WHERE qid='$qid[$j]'") or die('updateQuestionError');
        $updateoptions = mysqli_query($link, "UPDATE options SET option='$options[$i]' WHERE optionid='$optionid[$i]'") or die('updateOptionsError');
        $updateAnswer = mysqli_query($link, "UPDATE answer SET ansid='$answers[$j]' WHERE qid='$qid[$j]'") or die('updateAnswerError');     
        $k++;
    }
  }
  echo json_encode($optionid);
    
    if ($updatequestion && $updateoptions && $updateAnswer) {
        $response["success"] = "1";
        header("location:dashboard.php?q=5");
    } 
    else {
       echo 'Fail to update quiz';
       }
    echo json_encode($response);
}
    
   
  
    

?>