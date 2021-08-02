<?php
include_once 'dbFunctions.php';

session_start();
if (!(isset($_SESSION['email']))) {
    header("location:login.php");
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    include_once 'dbFunctions.php';
}
?>

<!DOCTYPE html>
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
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Online Quiz System</a>
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
                    <?php
                    if (@$_GET['q'] == 0) {
                        echo "<h1> WELCOME TO Admin Page!!
					</h1>";
                    }

                    if (@$_GET['q'] == 2) {
                        $q = mysqli_query($link, "SELECT * FROM rank  ORDER BY score DESC ")or die('Error223');
                        echo '<div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1" >
                    <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Score</b></center></td></tr>';
                        $c = 0;
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['email'];
                            $s = $row['score'];
                            $q12 = mysqli_query($link, "SELECT * FROM users WHERE userName='$e' ")or die('Error231');
                            while ($row = mysqli_fetch_array($q12)) {
                                //$name = $row['name'];
                            }
                            $c++;
                            echo '<tr><td style="color:#99cc32"><center><b>' . $c . '</b></center></td><td><center>' . $e . '</center></td><td><center>' . $s . '</center></td>';
                        }
                        echo '</table></div></div>';
                    }
                    ?>
                    <?php
                    if (@$_GET['q'] == 1) {
                        $result = mysqli_query($link, "SELECT * FROM users") or die('Error');
                        echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>Email</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $name = $row['userName'];
                            $email = $row['userEmail'];
                            echo '<tr><td><center>' . $c++ . '</center></td><td><center>' . $name . '</center></td><td><center>' . $email . '</center></td><td><center><a title="Delete User" href="update.php?demail=' . $email . '"><b><i class="bi bi-trash"></i></b></a></center></td></tr>';
                        }
                        $c = 0;
                        echo '</table></div></div>';
                    }
                    ?>

                    <?php
                    if (@$_GET['q'] == 4 && !(@$_GET['step'])) {
                        echo '<h1 style="text-align: center; margin: 0 0 20px">Enter Quiz Details</h1>
                        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="name"></label>  
                                    <div class="col-md-12">
                                        <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="total"></label>  
                                    <div class="col-md-12">
                                        <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="right"></label>  
                                    <div class="col-md-12">
                                        <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="wrong"></label>  
                                    <div class="col-md-12">
                                        <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                            </fieldset>
                        </form>';
                    }
                    ?>

                    <?php
                    if (@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
                        echo ' 
                        <div class="row" style="align-items: center; justify-content: center;">
                        <h2 class="col-12 text-center">Enter Question Details</h2>
                        <div class="col-md-7">
                        <form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4 "  method="POST" enctype="multipart/form-data">
                        <fieldset>
                        ';

                        for ($i = 1; $i <= @$_GET['n']; $i++) {
                            echo '<b>Question number&nbsp;' . $i . '&nbsp;:</><br /><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns' . $i . ' "></label>  
                                        <div class="col-md-12">
                                            <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Write question number ' . $i . ' here/Upload Image"></textarea>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file'.$i.'" > Select image to upload:</label>
                                        <input type="file" name="file'.$i.'" id="file'.$i.'" class="form-contro col-12">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="' . $i . '1"></label>  
                                        <div class="col-md-12">
                                            <input id="' . $i . '1" name="' . $i . '1" placeholder="Enter option a" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="' . $i . '2"></label>  
                                        <div class="col-md-12">
                                            <input id="' . $i . '2" name="' . $i . '2" placeholder="Enter option b" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="' . $i . '3"></label>  
                                        <div class="col-md-12">
                                            <input id="' . $i . '3" name="' . $i . '3" placeholder="Enter option c" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="' . $i . '4"></label>  
                                        <div class="col-md-12">
                                            <input id="' . $i . '4" name="' . $i . '4" placeholder="Enter option d" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <br />
                                    <b>Correct answer</b>:<br />
                                    <select id="ans' . $i . '" name="ans' . $i . '" placeholder="Choose correct answer " class="form-control input-md" >
                                    <option value="a">Select answer for question ' . $i . '</option>
                                    <option value="a"> option a</option>
                                    <option value="b"> option b</option>
                                    <option value="c"> option c</option>
                                    <option value="d"> option d</option> </select><br /><br />';
                        }
                        echo '<div class="form-group">
                                <label class="col-md-12 control-label" for=""></label>
                                <div class="col-md-12"> 
                                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                </div>
                              </div>

                        </fieldset>
                        </form></div>';
                    }
                    ?>

                    <?php
                    if (@$_GET['q'] == 5) {
                        $result = mysqli_query($link, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                        echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $title = $row['title'];
                            $total = $row['total'];
                            $sahi = $row['sahi'];
                            $eid = $row['eid'];
                            echo '<tr><td><center style="margin-top:30px;font-size: 20px;">' . $c++ . '</center></td><td><center style="margin-top:30px;font-size: 20px;">' . $title . '</center></td><td><center style="margin-top:30px;font-size: 20px;">' . $total . '</center></td><td><center style="margin-top:30px;font-size: 20px;">' . $sahi * $total . '</center></td>
                                                    
<td><center><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="pull-right btn sub1" style="margin:5px;background:green;color:black"><i class="bi bi-pencil-fill"></i>&nbsp;<span class="title1"><b>Update</b></span></a></b></center>
    <center><b><a href="update.php?q=rmquiz&eid=' . $eid . '" class="pull-right btn sub1" style="margin:5px;background:red;color:black"><i class="bi bi-trash-fill"></i>&nbsp;<span class="title1"><b>Remove</b></span></a></b></center></td>';
                        }
                        $c = 0;
                        echo '</table></div></div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
