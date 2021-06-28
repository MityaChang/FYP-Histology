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
                background: url('./img/BgMainPage.png') no-repeat center center fixed; 
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
                <h1 class="h1-histology">Histology</h1>
                <div class="row ">
                    <div class=" card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <div class="card-body">
                            <img src="img/skeletal-muscle/1M18_0.5x.jpg" class ="round-circle" id="cardImage" alt=""/>
                            <div class="overlay">
                                <div class="text">Hello World</div>
                            </div>

                        </div>
                    </div>
                    <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <img src="img/skeletal-muscle/1M23_0.9x.jpg" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Hello World2</div>
                        </div>

                    </div>

                    <div class="card text-white mb-3 mt-4 ml-4" style="max-width: 20rem;">
                        <img src="img/skeletal-muscle/1M24_0.7x.jpg" class ="round-circle" id="cardImage" alt=""/>
                        <div class="overlay">
                            <div class="text">Hello World3</div>
                        </div>
                    </div>
                </div>
                <h1 class="h1-summary"> Summary</h1>
                <hr>
                <h3>Histology is the microscopic anatomy and academics and also the medical field would benefit from a a web application of the histology images of organs.</h3>
                <hr>
                <h4>By the end of this session, you will acquire the skills and knowledge to...</h4><br>
                <h5>&#10004; Identify organs based on the images shown. </h5>
                <h5>&#10004; Understand the arrangement of cells and tissues in a normal organ system. </h5>
                <br/><br/><br/><br/><br/><br/>
                <hr>
            </div>
        </div>


        <!-- End of Container -->
    </body>
</html>