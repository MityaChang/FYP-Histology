<?php
include_once 'dbFunctions.php';
session_start();
$email = $_SESSION['email'];

if (isset($_SESSION['key'])) {
    if (@$_GET['q'] == 'rmquiz' && $_SESSION['key'] == 'admin') {
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
                    <title>Dashboard | Online Quiz System</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <link href="css/welcome.css" rel="stylesheet" type="text/css"/>
                    <link href="css/font.css" rel="stylesheet" type="text/css"/>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                     <style>
            .navbar-custom {
                background-image: url("./img/banner-SAS.jpg");
                background-size: cover;
             
                width: 100%;  /* Full width */
                height: 50px;
               
            }
        </style>
                </head>
                <body>
                      <nav class="navbar navbar-expand-lg navbar-custom">
                          <a class="navbar-brand"><b>Online Quiz System</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    <li <?php if (@$_GET['q'] == 0) echo'class="active nav-item"'; ?>><a href="dashboard.php?q=0" class="nav-link">Home<spanavn class="sr-only">(current)</span></a></li>
                    <li <?php if (@$_GET['q'] == 1) echo'class="active nav-item"'; ?>><a href="dashboard.php?q=1" class="nav-link">User</a></li>
                    <li <?php if (@$_GET['q'] == 2) echo'class="active nav-item"'; ?>><a href="dashboard.php?q=2" class="nav-link">Ranking</a></li>
                    <li class="dropdown <?php if (@$_GET['q'] == 4 || @$_GET['q'] == 5) echo'active"'; ?>">
                    <li class="nav-item"><a href="dashboard.php?q=4" class="nav-link">Add Quiz</a></li>
                    <li class="nav-item"><a href="dashboard.php?q=5" class="nav-link">Remove Quiz</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            Admin
                                            <i class="bi bi-caret-down"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-100px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <button type="button" tabindex="0" class="dropdown-item"><i class="bi bi-person"></i>Admin Account</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="logout1.php?q=dashboard.php"><i class="bi bi-box-arrow-right"></i>&nbsp;Log out</a></li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                          
                        <div class="row" style="align-items: center; justify-content: center;">
                        <h2 class="col-12 text-center">Update Question Details</h2>
                        <div class="col-md-7">
                        <form class="form-horizontal title1" name="form" action="doUpdate.php?total=<?php echo count($options)?>&eid=<?php echo $eid?>&totalQues=<?php echo $total?>" method="POST">
                        <fieldset>
              <?php                  for ($i = 0; $i <= count($options); $i++) {
            ?>
                                <b>Question number&nbsp; <?php echo $i+1 ?>  &nbsp;:</b><br /><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns' . <?php echo $i+1 ?> . ' "></label>  
                                        <div class="col-md-12">
                                            <textarea rows="3" cols="5" name="question<?php echo $i ?>" class="form-control"><?php echo $questionName[$i] ?></textarea>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file'.<?php echo $i ?>.'" > Select image to upload:</label>
                                        <input type="file" name="file'.<?php echo $i+1 ?>.'" id="file'.<?php echo $i+1 ?>.'" class="form-contro col-12">
                                    </div>
                                    <?php if ($i == 0) { ?>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?> . '1"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php echo $i+1 ?> . '1" name="option<?php echo $i ?>" value="<?php echo $options[$i]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?> . '2"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php echo $i ?> . '2" name="option<?php echo $i+1 ?>" value="<?php echo $options[$i + 1]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php $i ?> . '3"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php echo $i ?> . '3" name="option<?php echo $i+2 ?>"  value="<?php echo $options[$i + 2]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?>  . '4"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php $i ?>. '4" name="option<?php echo $i+3 ?>"  value="<?php echo $options[$i + 3]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <br />
                                        <b>Correct answer</b>:<br />
                                        <select id="ans<?php echo $i ?>" name="ans<?php echo $i ?>" placeholder="Choose correct answer " class="form-control input-md" >
                                            <option value="<?php echo $answers[$i]?>" selected="selected"><?php echo $answers[$i] ?></option>
                                            <option value="a"> option a</option>
                                            <option value="b"> option b</option>
                                            <option value="c"> option c</option>
                                            <option value="d"> option d</option> </select><br /><br />
                                    <?php } else {
                                        ?>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?> . '1"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php echo $i ?> . '1" name="option<?php echo $i*4 ?>" value="<?php echo $options[($i * 4)]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?> . '2"></label>  
                                            <div class="col-md-12">
                                                <input id="' . <?php echo $i ?> . '2" name="option<?php echo ($i*4) +1 ?>" value="<?php echo $options[($i * 4) + 1]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' .  <?php echo $i  ?>. '3"></label>  
                                            <div class="col-md-12">
                                                <input id="' . $i . '3" name="option<?php echo ($i*4) +2 ?>" value="<?php echo $options[($i * 4) + 2]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="' . <?php echo $i ?> . '4"></label>  
                                            <div class="col-md-12">
                                                <input id="' . $i . '4" name="option<?php echo ($i*4) +3 ?>" value="<?php echo $options[($i * 4) + 3]['option'] ?>" class="form-control input-md" type="text">
                                            </div>
                                        </div>
                                        <br />
                                        <b>Correct answer</b>:<br />
                                        <select id="ans<?php echo $i ?>" name="ans<?php echo $i ?>" placeholder="Choose correct answer " class="form-control input-md" >
                                            <option value="<?php echo $answers[$i]?>" selected="selected"><?php echo $answers[$i] ?></option>
                                            <option value="a"> option a</option>
                                            <option value="b"> option b</option>
                                            <option value="c"> option c</option>
                                            <option value="d"> option d</option> </select><br /><br />


                                        <?php
                                    }

                                    if ($i >= $total - 1) {
                                        break;
                                    }
                                    ?>
                                <?php }
                                ?>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Update" class="btn btn-primary"/>
                                    </div>
                                </div>
                        </div>
                        </fieldset>
                        </form></div>
            </body>
        </html>

        <?php
    }
}
?>
