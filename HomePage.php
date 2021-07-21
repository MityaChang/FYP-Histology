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
              background-image: url("./img/homepage.png");
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
        <!--middle container -->
        <div class="container col-12" style="margin-top: 75px;">
            <h1 class="h1-histology"><b>Histology</b></h1>

                   <div class="row" style="margin-left: 25px">
                    <div class=" card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <div class="card-body">
                            <img src="img/testes/f5-testes-thumbnail.png" class ="round-circle" id="cardImage" alt=""/>
                            <div class="overlay">
                                <div class="text">Testes</div>
                            </div>

                        </div>
                    </div>
                    <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <img src="img/kidney/f1-kidney-thumbnail.png" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Kidney</div>
                        </div>

                    </div>

                    <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <img src="img/liver/f1-liver-thumbnail.png" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Liver</div>
                        </div>
                    </div>
                       <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                           <img src="img/small-intestine/f6-smInt-thumbnail.png" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Heart</div>
                        </div>
                    </div>
                       <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                           <img src="img/lungs/f1-lungs1-thumbnail.png" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Lungs</div>
                        </div>
                    </div>
                </div>
            <br>
            <div class="paragraphs" style="margin-left: 55px;">
                <h1 class="h1-summary">Learning Histology with us!</h1>
                <hr>
                <h3>Learning histology can be fun!</h3>
                <hr>
                <h3>Welcome! Follow along and you will have a tons of fun as you navigate through!</h3>
                 <hr>
                
                <h3>You may monitor your progress as you discover and learn some of the important structures of our organs that perform crucial functions for us every day.</h3>
                
                <h3>In this application, you will find interesting learning materials, and interactive quizzes that will help you enhance your knowledge of histology! </h3>
                <br>
                <h3>Enjoy your journey ahead! </h3>
                <hr>
            </div>



        <!-- End of Container -->
    </body>
</html>