<?php
include_once 'dbFunctions.php';
session_start();
$email = $_SESSION['email'];

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'viewQuiz' && $_SESSION['key'] == 'email') {
        $eid = @$_GET['eid'];
        $quiz = mysqli_query($link, "SELECT * FROM quiz WHERE eid='$eid' ")or die('QuizError');
        while ($row = mysqli_fetch_array($quiz)) {
            $total = $row['total'];
        }
        $question = mysqli_query($link, "SELECT * FROM `questions` WHERE eid='$eid'") or die('QuestionError');
        while ($row = mysqli_fetch_array($question)) {
            $qid[] = $row['qid'];
            $questionName[] = $row['qns'];
        }
        for ($i = 0; $i < count($qid); $i++) {
            ${"variable$i"} = $qid[$i];
            $option = mysqli_query($link, "SELECT * FROM options WHERE qid='$qid[$i]'") or die('OptionsError');
            while ($row = mysqli_fetch_array($option)) {
                $options[] = $row;
            }
        }
        for ($i = 0; $i < count($qid); $i++) {
            $answer = mysqli_query($link, "SELECT * FROM answer WHERE qid='$qid[$i]'") or die('AnswerError');
            while ($row = mysqli_fetch_array($answer)) {
                $answers[] = $row['ansid'];
            }
        }
        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Welcome | Histology</title>
                <link  rel="stylesheet" href="css/bootstrapQuiz.min.css"/>
                <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
                <link rel="stylesheet" href="css/welcome.css">
                <link  rel="stylesheet" href="css/font.css">
                <script src="js/jquery.js" type="text/javascript"></script>
                <script src="js/bootstrap.min.js"  type="text/javascript"></script>
                <script src="js/imageZoom.js" type="text/javascript"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            </head>
            <body>
                <nav class="navbar navbar-custom title1">

                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#" id="textColor"><b>Histology Quiz</b></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                <!-- this echo ask qikai if needed -->
                                <li <?php if (@$_GET['q'] == 1) echo'class="active"'; ?> class="nav-item active"> <a href="welcome.php?q=1" id="textColor" class="nav-link"><i class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                                <li <?php if (@$_GET['q'] == 2) echo'class="active"'; ?> class="nav-item"> <a href="welcome.php?q=2" id="textColor" class="nav-link"><i class="bi bi-book"></i>&nbsp;History</a></li>
                                <li <?php if (@$_GET['q'] == 3) echo'class="active"'; ?>  class="nav-item"> <a href="welcome.php?q=3" id="textColor" class="nav-link"><i class="bi bi-bar-chart-line-fill"></i>&nbsp;Ranking</a></li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li <?php echo''; ?>  class="nav-item"> <a href="HomePage.php" id="textColor" class="nav-link"><i class="bi bi-box-arrow-right"></i>&nbsp;Back to Main Page</a></li>
                            </ul>




                        </div>
                    </div>
                </nav>
                <br><br>    
                <div class="container">
                    <div class="row">
                        <div class="col-12">
        <?php
        if (@$_GET['q'] == 1) {
            $result = mysqli_query($link, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
            echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</center></b></td><td><center><b>Action</b></center></td></tr>';
            $c = 1;
            while ($row = mysqli_fetch_array($result)) {
                $title = $row['title'];
                $total = $row['total'];
                $sahi = $row['sahi'];
                $eid = $row['eid'];
                $q12 = mysqli_query($link, "SELECT score FROM history WHERE eid='$eid' AND email='$email'")or die('Error98');
                $rowcount = mysqli_num_rows($q12);
                if ($rowcount == 0) {
                    echo '<tr><td><center>' . $c++ . '</center></td><td><center>' . $title . '</center></td><td><center>' . $total . '</center></td><td><center>' . $sahi * $total . '</center></td><td><center><b><a href="welcome.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><i class="bi bi-box-arrow-in-up-right"></i>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                } else {
                    echo '<tr style="color:#99cc32"><td><center>' . $c++ . '</center></td><td><center>' . $title . '&nbsp;<i class="bi bi-check-lg"></i></center></td><td><center>' . $total . '</center></td><td><center>' . $sahi * $total . '</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><i class="bi bi-arrow-counterclockwise"></i>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                }
            }
            $c = 0;
            echo '</table></div></div>';
        }
        ?>  

                            <?php
                            if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
                                $eid = @$_GET['eid'];
                                $sn = @$_GET['n'];
                                $total = @$_GET['t'];
                                $q = mysqli_query($link, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
                                echo '<div class="panel" style="margin:5%">';
                                while ($row = mysqli_fetch_array($q)) {
                                    $qns = $row['qns'];
                                    $qid = $row['qid'];
                                    echo '<b>Question &nbsp;' . $sn . '&nbsp;:<br /><br />' . $qns . '</b><br /><br />';
                                }

                                $query = mysqli_query($link, "select * from images where qid = '$qid'");
                                while ($row = mysqli_fetch_assoc($query)) {
                                    echo '<div class="img-zoom-container"><img id="myimage" src="' . $row['file_name'] . '" style = "width:500px;height:300px;"class="image-fluid"/>'
                                    . '<div id="myresult" class="img-zoom-result"></div>
                                </div><script>
                                imageZoom("myimage", "myresult");
                                </script>';
                                }
                                $q = mysqli_query($link, "SELECT * FROM options WHERE qid='$qid' ");
                                echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
                        <br />';

                                while ($row = mysqli_fetch_array($q)) {
                                    $option = $row['option'];
                                    $optionid = $row['optionid'];
                                    echo'<input type="radio" name="ans" required value="' . $optionid . '">&nbsp;' . $option . '<br /><br />';
                                }
                                echo'<br /><button type="submit" class="btn btn-primary"><i class="bi bi-arrow-right-square"></i>&nbsp;Next</button></form></div>';
                            }

                            if (@$_GET['q'] == 'result' && @$_GET['eid']) {
                                $eid = @$_GET['eid'];
                                $q = mysqli_query($link, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ")or die('Error157');
                                echo '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                                while ($row = mysqli_fetch_array($q)) {
                                    $s = $row['score'];
                                    $w = $row['wrong'];
                                    $r = $row['sahi'];
                                    $qa = $row['level'];
                                    echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>' . $qa . '</td></tr>
                                <tr style="color:#99cc32"><td>Right Answer&nbsp;<i class="bi bi-check-circle"></i></td><td>' . $r . '</td></tr> 
                                <tr style="color:red"><td>Wrong Answer&nbsp;<i class="bi bi-x-octagon-fill"></i></td><td>' . $w . '</td></tr>
                                <tr style="color:#66CCFF"><td>Score&nbsp;<i class="bi bi-clipboard-data"></i></td><td>' . $s . '</td></tr>';
                                }
                                $q = mysqli_query($link, "SELECT * FROM rank WHERE  email='$email' ")or die('Error157');
                                while ($row = mysqli_fetch_array($q)) {
                                    $s = $row['score'];
                                    echo '<tr style="color:#990000"><td>Overall Score&nbsp;<i class="bi bi-calendar-check"></i></td><td>' . $s . '</td></tr>';
                                }
                                echo '</table><a href="viewSummary.php?q=viewQuiz&eid=' . $eid . '"><input class="btn btn-warning" type="submit" value="View Summary"/></a>'
                                . '<input class="btn btn-warning" type="submit" value="Challenge fill in blank"></div>';
                            }
                            ?>

                            <?php
                            if (@$_GET['q'] == 2) {
                                $q = mysqli_query($link, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ")or die('Error197');
                                echo '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr style="color:black;"><td><center><b>S.N.</b></center></td><td><center><b>Quiz</b></center></td><td><center><b>Question Solved</b></center></td><td><center><b>Right</b></center></td><td><center><b>Wrong<b></center></td><td><center><b>Score</b></center></td>';
                                $c = 0;
                                while ($row = mysqli_fetch_array($q)) {
                                    $eid = $row['eid'];
                                    $s = $row['score'];
                                    $w = $row['wrong'];
                                    $r = $row['sahi'];
                                    $qa = $row['level'];
                                    $q23 = mysqli_query($link, "SELECT title FROM quiz WHERE  eid='$eid' ")or die('Error208');

                                    while ($row = mysqli_fetch_array($q23)) {
                                        $title = $row['title'];
                                    }
                                    $c++;
                                    echo '<tr><td><center>' . $c . '</center></td><td><center>' . $title . '</center></td><td><center>' . $qa . '</center></td><td><center>' . $r . '</center></td><td><center>' . $w . '</center></td><td><center>' . $s . '</center></td></tr>';
                                }
                                echo'</table></div>';
                            }

                            if (@$_GET['q'] == 3) {
                                $q = mysqli_query($link, "SELECT * FROM rank ORDER BY score DESC ")or die('Error223');
                                echo '<div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Email</b></center></td><td><center><b>Score</b></center></td></tr>';
                                $c = 0;

                                while ($row = mysqli_fetch_array($q)) {
                                    $e = $row['email'];
                                    $s = $row['score'];
                                    $q12 = mysqli_query($link, "SELECT * FROM users WHERE userName='$e' ")or die('Error231');
                                    while ($row = mysqli_fetch_array($q12)) {
                                        $name = $row['userEmail'];
                                    }
                                    $c++;
                                    echo '<tr><td style="color:black"><center><b>' . $c . '</b></center></td><td><center>' . $name . '</center></td><td><center>' . $e . '</center></td><td><center>' . $s . '</center></td></tr>';
                                }
                                echo '</table></div></div>';
                            }
                            ?>
                            </body>
                            </html>

        <?php
    }
}
?>
