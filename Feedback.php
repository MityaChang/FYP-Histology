<?php
session_start();
$email = $_SESSION['email'];
$userName = $_SESSION['username'];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Histology Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
           body{
               background-image: url("./img/feedback.png");
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
            }
            #navigation{
                background-image: url("./img/banner-SAS.jpg");
            }
            .dropdown:hover>.dropdown-menu {
                display: block;
            }

            .dropdown>.dropdown-toggle:active {
                /*Without this, clicking will make it sticky*/
                pointer-events: none;
            }
            #navBarlogo {
                width: 250px;
                height:80px;
                cursor: pointer;
            }
        </style>
        <link href="css/Home.css" rel="stylesheet" type="text/css"/>
        <link href="css/navbar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navBar.php");
        ?>
        <!-- End of Navigation Bar -->
        <br/><br/><br/><br/>


        <!--middle container -->
        <div class="container">
            <div class="col-12" >
                <h1 class="h1-histology">Feedback</h1>

                <h4>What can we improve on?</h4>
                <hr>

                <form id="defaultForm" action="doFeedBack.php" method="post">
                    <div class="form-group">
                        <div class="form-group w-25">
                            <h3>Subject:</h3>
                            <input class="form-control" id="id_subject" type="text" name="subject" placeholder="E.g Quiz questions" required>

                        </div>
                        <div class="form-group w-50">
                            <h3>Name:</h3>
                            <input class="form-control" id="id_name" type="text" name="name" value="<?php echo $userName ?>" readonly="">

                        </div>
                        <div class="form-group w-50">
                            <h3>Email:</h3>
                            <input class="form-control" id="id_email" type="text" name="email" required value="<?php echo $email ?>" readonly="">
                        </div>
                        <div class="form-group w-75">
                            <h3>Comments:</h3>
                            <textarea id="id_comments" class="form-control" name="comments" rows="8" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Submit</button>

                        <br/><br/>
                </form>
            </div>
        </div>


        <!-- End of Container -->
    </body>
</html>