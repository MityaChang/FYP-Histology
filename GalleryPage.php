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
                                <th colspan="3" style="text-align:left;">Lungs</th>
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%" onclick="openLungsModal();currentSlide2(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2"><br><b>Lungs</b> are important organ that helps with gaseous exchange. Have you ever wonder how does it looks like under microscope?
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
                               <td colspan="2" rowspan="2"><br><b>Liver</b> is one of the largest organ in the body and it helps to detoxifies chemicals and metabolizes drugs.  
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
                                <td colspan="2" rowspan="2"><br>Without your <b>Kidney</b>, your body would be filled with waste.
                                <br>Give our kidneys some appreciation and let's look at what makes it up under the microscope!</td>
                            </tr>
                        </tbody>
                         <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Testes</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/testes/f5-testes-thumbnail.png" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2"><br>Other than the ovaries, <b>testes</b> is the other organ that plays a part in reproduction.
                                <br>Take a look at which structures play a major role in sperm development! </td>
                            </tr>
                        </tbody>
                         <tbody>
                            <tr>
                                <th colspan="3" style="text-align:left;">Small Intestine</th>   
                            </tr>
                            <tr>
                                <td colspan="2" class="description"><b>Description</b></td>
                                <td rowspan="2"><img src="img/small-intestine/f6-smInt-thumbnail.png" style="width:100%" onclick="openSmIntModal();currentSlide1(1)" class="hover-shadow cursor"></td>
                            </tr>
                            <tr>  
                                <td colspan="2" rowspan="2"><br><b>Small intestine</b> helps with digestion and allows nutrients to take place.
                                <br>Click here to find more about the different structures of the small intestine! </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br/><br/>  
                <!-------------------------------------------------- Testes Modal ----------------------------------------------------------------->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/testes/normal-testes.png" style="width:100%;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/testes/f5-testes-stains.png" style="width:100%;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/testes/f5-testes.png" style="width:100%;">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/testes/f5-testes2.png" style="width:100%;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/testes/f5-testes3.png" style="width:100%;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/testes/f5-testes4.png" style="width:100%;">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/testes/f5-testes5.png" style="width:100%;">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/testes/normal-testes.png" style="width:95%" onclick="currentSlide(1)" alt="Slide on Normal Testes">
                    </div>
                    <div class="column1">
                       <img class="demo cursor" src="img/testes/f5-testes-stains.png" style="width:95%" onclick="currentSlide(2)" alt="Slide on stains">
                    </div>
                    <div class="column1">
                      <img class="demo cursor" src="img/testes/f5-testes.png" style="width:95%" onclick="currentSlide(3)" alt="Figure 1: Testes stained with H&E stain.">
                    </div>
                    <div class="column1">
                      <img class="demo cursor" src="img/testes/f5-testes2.png" style="width:95%" onclick="currentSlide(4)" alt="Figure 2: Testes stained with H&E stain.">
                    </div>
                    <div class="column1">
                       <img class="demo cursor" src="img/testes/f5-testes3.png" style="width:95%" onclick="currentSlide(5)" alt="Figure 3: Testes stained with PAS stain.">
                    </div>       
                    <div class="column1">
                       <img class="demo cursor" src="img/testes/f5-testes4.png" style="width:95%" onclick="currentSlide(6)" alt="Figure 4: Testes stained with MT stain.">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/testes/f5-testes5.png" style="width:95%" onclick="currentSlide(7)" alt="Figure 5: Testes stained with RT stain.">
                    </div>
                </div>         
                <!------------------------------------------ End of Testes Muscle Modal ------------------------------------------------------->


                <div class="col-12" >
                    <!------------------------------------------ Start of Small Intestine Light box -------------------------------------------------------------->
                    <div id="smIntModal" class="modal">
                        <span class="close cursor" onclick="closeSmIntModal()">&times;</span>
                        <div class="modal-content">

                            <div class="smIntSlides">
                                <div class="numbertext">1 / 10</div>
                                <img src="img/small-intestine/small-intestine.png" style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">2 / 10</div>
                               <img src="img/small-intestine/smInt-stains.png" style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">3 / 10</div>
                                <img src="img/small-intestine/f6-smInt1.png" style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">4 / 10</div>
                                <img src="img/small-intestine/f6-smInt2.png"style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">5 / 10</div>
                                <img src="img/small-intestine/f6-smInt3.png" style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">6 / 10</div>
                                 <img src="img/small-intestine/f6-smInt4.png" style="width:100%">
                            </div>
                            <div class="smIntSlides">
                                <div class="numbertext">7 / 10</div>
                                <img src="img/small-intestine/f6-smInt5.png" style="width:100%">
                            </div>

                            <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides1(1)">&#10095;</a>

                            <div class="caption-container">
                                <p id="caption1"></p>
                            </div>

                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/small-intestine.png" style="width:95%" onclick="currentSlide1(1)" alt="Slide on Small Intestine">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/smInt-stains.png" style="width:95%" onclick="currentSlide1(2)" alt="Slide on Stains">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/f6-smInt1.png" style="width:95%" onclick="currentSlide1(3)" alt="Figure 1: Small intestine stained with H&E stain.">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/f6-smInt2.png" style="width:95%" onclick="currentSlide1(4)" alt="Figure 2: Small intestine stained with H&E stain.">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/f6-smInt3.png" style="width:95%" onclick="currentSlide1(5)" alt="Figure 3: Small intestine stained with RT stain.">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/f6-smInt4.png" style="width:95%" onclick="currentSlide1(6)" alt="Figure 4: Small intestine stained with MT stain.">
                        </div>
                        <div class="column1">
                            <img class="demo1 cursor" src="img/small-intestine/f6-smInt5.png" style="width:95%" onclick="currentSlide1(7)" alt="Figure 5: Small intestine stained with PAS stain.">
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
                    <img class="demo3 cursor" src="img/liver/liver.png" style="width:95%" onclick="currentSlide3(1)" alt="Slide on Normal Liver">
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