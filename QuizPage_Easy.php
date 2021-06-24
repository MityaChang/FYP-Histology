<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Histology Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrapQuiz.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background: url('./img/QuizBG.jpg') no-repeat center center fixed; 
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
                <h1 class="h1-histology">Quiz</h1>
                <h2 class="easy-header">Easy</h2>
                <div class="quiz-page-holder">
                    <h1 class="h1-summary">MCQ</h1>
                    <hr>
                    <h3>There are 10 questions in this quiz, anyone who has a basic knowledge of Histology should be able to score decently on this quiz.</h3>
                    <hr>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">1. PAS is a <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> stain that is used to detect <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> integrity, and detect cellular <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> in normal or tumor tissues.</h3>
                        </div>
                        <input type="radio" id="1" name="q1" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="1">routine, nucleus, lipids</label><br>
                        <input type="radio" id="2" name="q1" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="2">special, basement membrane, polysaccharides</label><br>
                        <input type="radio" id="3" name="q1" value="3">
                        <label style="font-size:18px; margin-left:5px;" for="3">special, nucleus, polysaccharides</label><br>
                        <input type="radio" id="4" name="q1" value="4">
                        <label style="font-size:18px; margin-left:5px;" for="4">routine, basement membrane, lipids</label><br>
                    </div>
                    <br>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">2. PAS is a <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> of the tissue, whereas H&E stain can only provide a <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u> assessment of tissue.</h3>
                        </div>
                        <input type="radio" id="5" name="q2" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="5">overall, specific</label><br>
                        <input type="radio" id="6" name="q2" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="6">specific, overall</label><br>
                        <input type="radio" id="7" name="q2" value="3">
                        <label style="font-size:18px; margin-left:5px;" for="7">specific, specific</label><br>
                        <input type="radio" id="8" name="q2" value="4">
                        <label style="font-size:18px; margin-left:5px;" for="8">overall, overall</label><br>
                    </div>
                    <br>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">3. What does H&E stands for?</h3>
                        </div>
                        <input type="radio" id="9" name="q3" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="9">CpG Islands</label><br>
                        <input type="radio" id="10" name="q3" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="10">Cyclins</label><br>
                        <input type="radio" id="11" name="q3" value="3">
                        <label style="font-size:18px; margin-left:5px;" for="11">Cytoplasm Nucleus</label><br>
                        <input type="radio" id="12" name="q3" value="4">
                        <label style="font-size:18px; margin-left:5px;" for="12">Reticulin fibres</label><br>
                    </div>
                    <br>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">4. What could the pace space surrounding structure "A" be? </h3>
                        </div>
                        <img src="./img/H&E-Stains.png" alt="" style="width:40%; height: 40%;"/>
                        <br><br>
                        <input type="radio" id="13" name="q4" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="13">Collecting Duct</label><br>
                        <input type="radio" id="14" name="q4" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="14">Ureter</label><br>
                        <input type="radio" id="15" name="q4" value="3">
                        <label style="font-size:18px; margin-left:5px;" for="15">Bowman's capsule</label><br>
                        <input type="radio" id="16" name="q4" value="4">
                        <label style="font-size:18px; margin-left:5px;" for="16">None of the above</label><br>
                    </div>
                    <br>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">5. Assume that the kidney cells had a sudden mutation where they started expressing 
                                <b><u>metalloproteases / metalloproteinases</u></b>, while the organism was still alive. 
                                Will there be any change to the final staining result?
                            </h3>
                        </div>
                        <input type="radio" id="17" name="q5" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="17">Yes</label><br>
                        <input type="radio" id="18" name="q5" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="18">No</label><br>
                        <p>*Hint: Metalloproteases / Metalloproteinases, in the presence of metal ions, break protein fibres down.</p>
                    </div>
                    <br>
                    <div class="question-holder">
                        <div class="question-placeholder">
                            <h3 class="question_1_header">6. What anatomical structure is squared out in Image "A"?</h3>
                        </div>
                        <br>
                        <p><b>Image A</b></p>
                        <img src="./img/kidney-specimen.png" alt="" style="width:40%; height: 40%;"/>
                        <br><br>
                        <input type="radio" id="19" name="q6" value="1">
                        <label style="font-size:18px; margin-left:5px;" for="19">Ureter</label><br>
                        <input type="radio" id="20" name="q6" value="2">
                        <label style="font-size:18px; margin-left:5px;" for="20">Urethra</label><br>
                        <input type="radio" id="21" name="q6" value="3">
                        <label style="font-size:18px; margin-left:5px;" for="21">Collect Duct</label><br>
                        <input type="radio" id="22" name="q6" value="4">
                        <label style="font-size:18px; margin-left:5px;" for="22">Blood Vessel</label><br>                
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- End of Container -->
    </body>
</html>