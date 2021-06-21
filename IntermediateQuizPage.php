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
            .h1-quiz {
                font-size: 52px;
                text-align: center;
                text-shadow: 2px 2px 2px black,
                    4px 3px 4px black;
                color: #c694e0;
            }
            .h3-quiz {
                font-size: 40px;
                text-shadow: 2px 2px 2px black,
                    4px 3px 4px black;
                color: #c694e0;
            }
            .h3-sections {
                font-size: 30px;
                margin-left: 10px;
            }
            .container2{ 
                max-width: 100%;
                height: auto;
                background-color: #FFF;
            }
            .container3{ 
                max-width: 100%;
                height: auto;
                align-self: center;
                background-color: #FFF;
                border: thin solid #000000;
            }
            .container4{ 
                max-width: 100%;
                height: auto;
                align-self: center;
                background-color: #FFF;
                border: thin solid #000000;
                padding: 20px;
            }
            .questionText{
                padding: 10px;
                border-radius: 20px; 
                background: #D6FFE7; 
                width: 98%;
                margin-left: 10px;
                margin-right: 10px;
                font-size: 20px;

            }
            #div1 {
                width: 200px;
                margin-left: 60px;
                height: 50px;
                padding: 5px;
                border: 1px solid #aaaaaa;
            }
            #div2 {
                width: 200px;
                margin-left: 150px;
                height: 50px;
                padding: 5px;
                border: 1px solid #aaaaaa;
            } 

            .dragText{
                color: #000000;
                text-shadow: 0px 0px #ff0000;
                border: 2px solid #000000;
                padding: 5px;
                margin-left: 20px
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
        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }
        </script>
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
                <h1 class="h1-quiz">Quiz</h1>
                <br/>
                <h3 class="h3-quiz">Intermediate</h3>
                <div class="container2">
                    <div class="col-12" >
                        <br/>
                        <form action="help.php">
                            <div class="container3">
                                <h3 class="h3-sections">Section A & B</h3>
                                <h1 style="border-bottom:#000000 solid medium"></h1>
                                <h1 style="font-size: 20px;">There are 10 questions in this quiz, anyone who has a better understanding of Histology should be able to score decently on this quiz.</h1>
                            </div>
                            <br/>
                            <!--Section A -->
                            <h3 class="h3-sections">Section A : Fill in the Blanks</h3>

                            <!--Question 1 -->
                            <div class="container4">
                                <br/>
                                <h3 class="questionText" >&nbsp; 1. Figure 1 and 2 shows H&E stained kidney sections.</h3>
                                <br/>
                                <img src="img/Question1Fig1.png" alt="">&nbsp; </img>
                                <img src="img/Question1Fig2.png" alt=""/>
                                <br/><br/>
                                <h3 >&nbsp;1. Identify the structure circled in Figure1 and Figure 2.</h3>
                                <label for="Q1Figure1">Figure 1:&nbsp; </label>
                                <input type="text" id="Q1Figure1" name="Q1Figure1"><br><br>
                                <label for="Q1Figure2">Figure 2:</label>
                                <input type="text" id="Q1Figure2" name="Q1Figure2"><br><br>

                                <h3>&nbsp;2. Identify the structure labeled ‘A’ and ‘B’ in Figure 1.</h3>
                                <label for="Q1LabelA">Label A:&nbsp;</label>
                                <input type="text" id="Q1LabelA" name="Q1LabelA"><br><br>
                                <label for="Q1LabelB">Label B:&nbsp;</label>
                                <input type="text" id="Q1LabelB" name="Q1LabelB"><br>
                            </div>
                            <br/>
                            <!--End of Question 1 -->



                            <!-- Question 2 -->
                            <div class="container4">
                                <br/>
                                <h3 class="questionText" >&nbsp; 2. Figure 1 show histological slide of a kidney specimen.</h3>
                                <br/>
                                <img src="img/kidney-specimen-better-quality.png" alt=""/>
                                <br/><br/>
                                <label for="Q2Figure1">1. Black specks present in Figure 1 are usually</label>
                                <input type="text" id="Q2Figure1" name="Q2Figure1"><br>
                            </div>
                            <br/>
                            <!--End of Question 2 -->


                            <!--Question 3 -->
                            <div class="container4">
                                <br/>
                                <h3 class="questionText" >&nbsp; 3. Identify the four layers of the small intestine.</h3>
                                <br/>
                                <img src="img/small-intestine.png" alt=""/>
                                <br/><br/>
                                <h3>3. Identify the four layers of the small intestine.</h3>
                                <label for="Q3LabelA">Label A:&nbsp; </label>
                                <input type="text" id="Q3LabelA" name="Q3LabelA"><br><br>
                                <label for="Q3LabelB">Label B:&nbsp; </label>
                                <input type="text" id="Q3LabelB" name="Q3LabelB"><br><br>
                                <label for="Q3LabelC">Label C:&nbsp; </label>
                                <input type="text" id="Q3LabelC" name="Q3LabelC"><br><br>
                                <label for="Q3LabelD">Label D:&nbsp; </label>
                                <input type="text" id="Q3LabelD" name="Q3LabelD"><br>
                            </div>
                            <br/>
                            <!-- End of Question 3 -->

                            <!-- End of Section A --> 

                            <br/>
                            <!--Section B -->
                            <h3 class="h3-sections">Section B : Drag and Drop</h3>

                            <!-- Section B Question 1-->
                            <div class="container4">
                                <br/>
                                <h3 class="questionText" >&nbsp; 2. Figure 1 and Figure 2 shows microscopic view of testes.</h3>
                                <br/>
                                <img style='margin-left: 20px' src="img/f1-sectionb.png" alt=""/>
                                <img style='margin-left: 20px' src="img/f2-sectionb.png" alt=""/>
                                <br/><br/>
                                <div class="row">
                                    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                                </div>
                                <br/><br/>
                                <h3>1. Drag and Drop the correct stains to the images.</h3>
                                <div class="row">
                                    <h5  class="dragText" id="drag1" draggable="true" ondragstart="drag(event)" width="336" height="69">H&E stain&nbsp;   </h5>
                                    <h5  class="dragText" id="drag2" draggable="true" ondragstart="drag(event)" width="336" height="69">Reticulin stain:&nbsp;   </h5>
                                    <h5  class="dragText" id="drag3" draggable="true" ondragstart="drag(event)" width="336" height="69">PAS stain:&nbsp;    </h5>
                                    <h5  class="dragText" id="drag4" draggable="true" ondragstart="drag(event)" width="336" height="69">Masson's Trichrome stain:&nbsp;   </h5>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>