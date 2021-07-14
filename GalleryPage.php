<html lang="en">
    <head>
        <title>Histology Learning</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/navbar.css" rel="stylesheet" type="text/css"/>
        <link href="css/Gallery.css" rel="stylesheet" type="text/css"/>
        <link href="css/GalleryImages.css" rel="stylesheet" type="text/css"/>
        <link href="css/Home.css" rel="stylesheet" type="text/css"/>
        <script src="js/lightbox.js" type="text/javascript"></script>
        <style>

            body{
                 background-image: url("./img/slide.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }


            #navigation{
                background-image: url("./img/banner-SAS.jpg");
            }

        </style>

    </head>
    <body>
        <!-- Start of Navigation Bar -->
        <?php
        include("navBar.php");
        ?>
        <!-- End of Navigation Bar -->
        
        <!----------------------------------------------------- Container ------------------------------------------------------------------------->

        <div class="container col-12" style="margin-top: 75px;">
            <div class="col-12">
                <h1 class="h1-histology"><b>Slides</b></h1>
                <div class="row">

                    <!----------------------------------------------------- Table ------------------------------------------------------------------------->
                    <table>
                        <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Skeletal Muscle</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"> <img src="img/skeletal-muscle/1M15_0.7x.jpg" style="width:100%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2">Placeholder for Skeletal Muscles
                                    <br>Click on the image to find out more!</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Heart</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/heart/organ1heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2">Placeholder for Heart
                                    <br>Click on the image to find out more!</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Liver</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/liver/f1-liver-thumbnail.png" style="width:100%" onclick="openLiverModal();currentSlide3(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2"> <br>Liver is one of the largest organ in the body and it helps to detoxifies chemicals and metabolizes drugs.  
                                <br>Click on the image to find out more about how the liver looks like under the microscope!</td>
                            </tr>
                        </tbody>
                         <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Kidney</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/kidney/f1-kidney-thumbnail.png" style="width:100%" onclick="openKidneyModal();currentSlide4(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2"><br>Without your kidney, your body would be filled with waste.
                                <br>Give our kidneys some appreciation and let's look at what makes it up under the microscope!</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
                <br/><br/>  
                <!-------------------------------------------------- Skeletal Modal ----------------------------------------------------------------->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/skeletal-muscle/1M15_0.7x.jpg" style="width:100%;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/skeletal-muscle/1M18_0.5x.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/skeletal-muscle/1M19_0.7x.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/skeletal-muscle/1M22_1.5x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/skeletal-muscle/1M23_0.9x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/skeletal-muscle/1M24_0.7x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/skeletal-muscle/1M09_1.4x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 10</div>
                            <img src="img/skeletal-muscle/1M13_0.8x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">9 / 10</div>
                            <img src="img/skeletal-muscle/1M16_0.7x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">10 / 10</div>
                            <img src="img/skeletal-muscle/1M17_0.8x.jpg" style="width:100%">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M15_0.7x.jpg" style="width:95%" onclick="currentSlide(1)" alt="1M15">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M18_0.5x.jpg" style="width:95%" onclick="currentSlide(2)" alt="1M18">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M19_0.7x.jpg" style="width:95%" onclick="currentSlide(3)" alt="1M19">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M22_1.5x.jpg" style="width:95%" onclick="currentSlide(4)" alt="1M22">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M23_0.9x.jpg" style="width:95%" onclick="currentSlide(5)" alt="1M23">
                    </div>       
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M24_0.7x.jpg" style="width:95%" onclick="currentSlide(6)" alt="1M24">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M09_1.4x.jpg" style="width:95%" onclick="currentSlide(7)" alt="1M09">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M13_0.8x.jpg" style="width:95%" onclick="currentSlide(8)" alt="1M13">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M16_0.7x.jpg" style="width:95%" onclick="currentSlide(9)" alt="1M16">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M17_0.8x.jpg" style="width:95%" onclick="currentSlide(10)" alt="1M17">
                    </div>

                </div>         
                <!------------------------------------------ End of Skeletal Muscle Modal ------------------------------------------------------->


                <div class="col-12" >
                    <!------------------------------------------ End of Heart Light box -------------------------------------------------------------->
                    <div id="heartModal" class="modal">
                        <span class="close cursor" onclick="closeHeartModal()">&times;</span>
                        <div class="modal-content">

                            <div class="heartSlides">
                                <div class="numbertext">1 / 10</div>
                                <img src="img/heart/organ1heart.jpg" style="width:100%">
                            </div>

                            <div class="heartSlides">
                                <div class="numbertext">2 / 10</div>
                                <img src="img/heart/organ2heart.jpg" style="width:100%">
                            </div>

                            <div class="heartSlides">
                                <div class="numbertext">3 / 10</div>
                                <img src="img/heart/organ3heart.jpg" style="width:100%">
                            </div>

                            <div class="heartSlides">
                                <div class="numbertext">4 / 10</div>
                                <img src="img/heart/organ4heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">5 / 10</div>
                                <img src="img/heart/organ5heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">6 / 10</div>
                                <img src="img/heart/organ6heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">7 / 10</div>
                                <img src="img/heart/organ7heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">8 / 10</div>
                                <img src="img/heart/organ8heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">9 / 10</div>
                                <img src="img/heart/organ9heart.jpg" style="width:100%">
                            </div>
                            <div class="heartSlides">
                                <div class="numbertext">10 / 10</div>
                                <img src="img/heart/organ10heart.jpg" style="width:100%">
                            </div>


                            <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides1(1)">&#10095;</a>

                            <div class="caption-container">
                                <p id="caption1"></p>
                            </div>

                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ1heart.jpg" style="width:95%" onclick="currentSlide1(1)" alt="Heart 1">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ2heart.jpg" style="width:95%" onclick="currentSlide1(2)" alt="Heart 2">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ3heart.jpg" style="width:95%" onclick="currentSlide1(3)" alt="Heart 3">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ4heart.jpg" style="width:95%" onclick="currentSlide1(4)" alt="Heart 4">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ5heart.jpg" style="width:95%" onclick="currentSlide1(5)" alt="Heart 5">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ6heart.jpg" style="width:95%" onclick="currentSlide1(6)" alt="Heart 6">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ7heart.jpg" style="width:95%" onclick="currentSlide1(7)" alt="Heart 7">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ8heart.jpg" style="width:95%" onclick="currentSlide1(8)" alt="Heart 8">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ9heart.jpg" style="width:95%" onclick="currentSlide1(9)" alt="Heart 9">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/heart/organ10heart.jpg" style="width:95%" onclick="currentSlide1(10)" alt="Heart 10">
                        </div>   
                    </div>     
                    <!---------------------------------------------- End of Heart Modal ------------------------------------------------------------->
                </div>        
                <!---------------------------------------------- End of Heart Box ------------------------------------------------------------->




                <!------------------------------------------ Start of Lungs Modal box -------------------------------------------------------------->

                <div id="lungsModal" class="modal">
                    <span class="close cursor" onclick="closeLungsModal()">&times;</span>
                    <div class="modal-content">

                        <div class="lungsSlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="img/lungs/normal-lungs.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="img/lungs/stains.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="img/lungs/f1-lungs1.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="img/lungs/f2-lungs2.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="img/lungs/f3-lungs3.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="img/lungs/f4-lungs4.png" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides2(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption2"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/normal-lungs.png" style="width:95%" onclick="currentSlide2(1)" alt="Slide on Normal Lung">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/stains.png" style="width:95%" onclick="currentSlide2(2)" alt="Slide on Stains">

                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1.png" style="width:95%" onclick="currentSlide2(3)" alt="Figure 1: Lung tissue stained with H&E stain.">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f2-lungs2.png" style="width:95%" onclick="currentSlide2(4)" alt="Figure 2: Lung tissue stained with MT stain.">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f3-lungs3.png" style="width:95%" onclick="currentSlide2(5)" alt="Figure 3: Lung tissue stained with Reticulin stain.">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f4-lungs4.png" style="width:95%" onclick="currentSlide2(6)" alt="Figure 4: Lung tissue stained with PAS stain.">
                    </div>
                </div>   
                <!---------------------------------------------- End of Lungs Box ------------------------------------------------------------->
            </div>        

            <!---------------------------------------------- Start of Liver Box ------------------------------------------------------------->
            <div id="liverModal" class="modal">
                <span class="close cursor" onclick="closeLiverModal()">&times;</span>
                <div class="modal-content">

                    <div class="liverSlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="img/liver/liver.png" style="width:100%">
                    </div>

                    <div class="liverSlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="img/liver/special-stains.png" style="width:100%">
                    </div>

                    <div class="liverSlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="img/liver/f1-liver.png" style="width:100%">
                    </div>

                    <div class="liverSlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="img/liver/f2-liver.png" style="width:100%">
                    </div>
                    <div class="liverSlides">
                        <div class="numbertext">5 / 6</div>
                        <img src="img/liver/f3-liver.png" style="width:100%">
                    </div>
                    <div class="liverSlides">
                        <div class="numbertext">6 / 6</div>
                        <img src="img/liver/f4-liver.png" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides3(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption3"></p>
                    </div>

                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/liver.png" style="width:95%" onclick="currentSlide3(1)" alt="Slide on Normal Lung">
                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/special-stains.png" style="width:95%" onclick="currentSlide3(2)" alt="Slide on Stains">

                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/f1-liver.png" style="width:95%" onclick="currentSlide3(3)" alt="Figure 1. Liver stained with H&E stain.">
                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/f2-liver.png" style="width:95%" onclick="currentSlide3(4)" alt="Figure 2. Liver stained with MT stain.">
                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/f3-liver.png" style="width:95%" onclick="currentSlide3(5)" alt="Figure 3. Liver stained with reticulin stain.">
                </div>
                <div class="column1">
                    <img class="demo3 cursor" src="img/liver/f4-liver.png" style="width:95%" onclick="currentSlide3(6)" alt="Figure 4. Liver stained with PAS stain.">
                </div>
            </div>   
            <!---------------------------------------------- End of Liver Modal ------------------------------------------------------------->
        </div>
        <!---------------------------------------------- End of Liver Box ------------------------------------------------------------->

        <!---------------------------------------------- Start of Kidney Box ------------------------------------------------------------->
        <div id="kidneyModal" class="modal">
            <span class="close cursor" onclick="closeKidneyModal()">&times;</span>
            <div class="modal-content">

                <div class="kidneySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="img/kidney/normal-kidney.png" style="width:100%">
                </div>

                <div class="kidneySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="img/kidney/kidney-stains.png" style="width:100%">
                </div>

                <div class="kidneySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="img/kidney/f1-kidney.png" style="width:100%">
                </div>

                <div class="kidneySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="img/kidney/f2-kidney.png" style="width:100%">
                </div>
                <div class="kidneySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="img/kidney/f3-kidney.png" style="width:100%">
                </div>
                <div class="kidneySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="img/kidney/f4-kidney.png" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides4(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption4"></p>
                </div>

            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/normal-kidney.png" style="width:95%" onclick="currentSlide4(1)" alt="Slide on Normal Kidney">
            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/kidney-stains.png" style="width:95%" onclick="currentSlide4(2)" alt="Slide on Stains">
            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/f1-kidney.png" style="width:95%" onclick="currentSlide4(3)" alt="Figure 1. Kidney stained with H&E stain.">
            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/f2-kidney.png" style="width:95%" onclick="currentSlide4(4)" alt="Figure 2. Kidney stained with MT stain.">
            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/f3-kidney.png" style="width:95%" onclick="currentSlide4(5)" alt="Figure 3. Kidney stained with reticulin stain.">
            </div>
            <div class="column1">
                <img class="demo4 cursor" src="img/kidney/f4-kidney.png" style="width:95%" onclick="currentSlide4(6)" alt="Figure 4. Kidney stained with PAS stain.">
            </div>
        </div>   
        <!---------------------------------------------- End of Liver Modal ------------------------------------------------------------->
    </div>
    <!---------------------------------------------- End of Liver Box ------------------------------------------------------------->
</div>
<!------------------------------------------------------- End of Container ------------------------------------------------------------->
</body>
</html>