<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Histology Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background-image: linear-gradient(to bottom right, #F5DFE9, #F5C1E6);
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
        <link href="css/QuizHome.css" rel="stylesheet" type="text/css"/>
        <link href="css/navbar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include("navBar.php");
        ?>
        <!-- End of Navigation Bar -->
        <br/><br/><br/><br/>


        <!--middle container -->
          <h1 class="h1-histology"> Quiz</h1>
        <div class="container col-12">

          
          


                <div class=" card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                    <h2 class="h2-diffuclty" style="color:#6DC88E">Easy</h2>
                    <div class="card-header" style="color: #c694e0">MCQ</div>
                    <div class="card-body" style="color: #33ac04;">
                        A list of MCQ questions about Histology
                        <br/>
                        <br/>
                        <a href="welcome.php?q=1" class="btn btn-info">Start</a>
                    </div>
                </div>
                <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                    <h2 class="h2-diffuclty" style="color:#c694e0">Intermediate</h2>
                    <div class="card-header" style="color: #c694e0">Fill in the blanks</div>
                    <div class="card-body" style="color: #33ac04;">
                        A list of fill in the blanks questions about Histology
                        <br/>
                        <br/>
                        <a href="IntermediateQuizPage.php" class="btn btn-info">Start</a>
                    </div>

                </div>



        </div>

        <!-- End of Container -->
    </body>
</html>