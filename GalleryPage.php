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
        <script src="js/lightbox.js" type="text/javascript"></script>
        <style>

            body { 
                background: url('./img/BgGallery.png') no-repeat center center fixed; 
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
        <br/><br/><br/><br/>

        <!----------------------------------------------------- Container ------------------------------------------------------------------------->
        <!-------------------------------------------------- Skeletal Muscle Light box ------------------------------------------------------------>
        <div class="container">
            <div class="col-12" >
                <h2 style="text-align:center; padding-top: 10px">Skeletal Muscle</h2>
                <div class="row">
                    <div class="column">
                        <img src="img/skeletal-muscle/1M15_0.7x.jpg" style="width:100%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/skeletal-muscle/1M18_0.5x.jpg" style="width:100%;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                           <img src="img/skeletal-muscle/1M19_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                          <img src="img/skeletal-muscle/1M22_1.5x.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                          <img src="img/skeletal-muscle/1M23_0.9x.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                           <img src="img/skeletal-muscle/1M24_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                          <img src="img/skeletal-muscle/1M09_1.4x.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                          <img src="img/skeletal-muscle/1M13_0.8x.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/skeletal-muscle/1M16_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/skeletal-muscle/1M17_0.8x.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                    </div>

                </div>
                <!------------------------------------------ End of Skeletal Muscle Light box ------------------------------------------------------->


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
                        <img class="demo cursor" src="img/skeletal-muscle/1M15_0.7x.jpg" style="width:100%" onclick="currentSlide(1)" alt="1M15">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M18_0.5x.jpg" style="width:100%" onclick="currentSlide(2)" alt="1M18">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M19_0.7x.jpg" style="width:100%" onclick="currentSlide(3)" alt="1M19">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M22_1.5x.jpg" style="width:100%" onclick="currentSlide(4)" alt="1M22">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M23_0.9x.jpg" style="width:100%" onclick="currentSlide(5)" alt="1M23">
                </div>       
                     <div class="column1">
                         <img class="demo cursor" src="img/skeletal-muscle/1M24_0.7x.jpg" style="width:100%" onclick="currentSlide(6)" alt="1M24">
                    </div>
                    <div class="column1">
                         <img class="demo cursor" src="img/skeletal-muscle/1M09_1.4x.jpg" style="width:100%" onclick="currentSlide(7)" alt="1M09">
                    </div>
                    <div class="column1">
                         <img class="demo cursor" src="img/skeletal-muscle/1M13_0.8x.jpg" style="width:100%" onclick="currentSlide(8)" alt="1M13">
                    </div>
                    <div class="column1">
                         <img class="demo cursor" src="img/skeletal-muscle/1M16_0.7x.jpg" style="width:100%" onclick="currentSlide(9)" alt="1M16">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/skeletal-muscle/1M17_0.8x.jpg" style="width:100%" onclick="currentSlide(10)" alt="1M17">
                    </div>

            </div>         
            <!------------------------------------------ End of Skeletal Muscle Modal ------------------------------------------------------->

            <!-------------------------------------------------- Heart Light box ---------------------------------------------------------------->
            <div class="col-12" >
                <h2 style="text-align:center; padding-top: 40px">Heart</h2>

                <div class="row">
                    <div class="column">
                        <img src="img/heart/organ1heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ2heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ3heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ4heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ5heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ6heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ7heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ8heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ9heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/heart/organ10heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(10)" class="hover-shadow cursor">
                    </div>
                </div>

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
                        <img class="demo1 cursor" src="img/heart/organ1heart.jpg" style="width:100%" onclick="currentSlide1(1)" alt="Heart 1">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ2heart.jpg" style="width:100%" onclick="currentSlide1(2)" alt="Heart 2">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ3heart.jpg" style="width:100%" onclick="currentSlide1(3)" alt="Heart 3">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ4heart.jpg" style="width:100%" onclick="currentSlide1(4)" alt="Heart 4">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ5heart.jpg" style="width:100%" onclick="currentSlide1(5)" alt="Heart 5">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ6heart.jpg" style="width:100%" onclick="currentSlide1(6)" alt="Heart 6">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ7heart.jpg" style="width:100%" onclick="currentSlide1(7)" alt="Heart 7">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ8heart.jpg" style="width:100%" onclick="currentSlide1(8)" alt="Heart 8">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ9heart.jpg" style="width:100%" onclick="currentSlide1(9)" alt="Heart 9">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/heart/organ10heart.jpg" style="width:100%" onclick="currentSlide1(10)" alt="Heart 10">
                    </div>   
                </div>     
                <!---------------------------------------------- End of Heart Modal ------------------------------------------------------------->
            </div>        
            <!---------------------------------------------- End of Heart Box ------------------------------------------------------------->


            <!-------------------------------------------------- Lungs Light box ---------------------------------------------------------------->
            <div class="col-12" >
                <h2 style="text-align:center; padding-top: 40px">Lungs</h2>

                <div class="row">
                    <div class="column">
                        <img src="img/lungs/normal-lungs.png" style="width:100%;" onclick="openLungsModal();currentSlide2(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%" onclick="openLungsModal();currentSlide2(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/lungs/f2-lungs2-thumbnail.png" style="width:100%" onclick="openLungsModal();currentSlide2(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ4heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ5heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ6heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ7heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ8heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ9heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ10heart.jpg" style="width:100%" onclick="openLungsModal();currentSlide2(10)" class="hover-shadow cursor">
                    </div>
                </div>

                <!------------------------------------------ End of Heart Light box -------------------------------------------------------------->
                <div id="lungsModal" class="modal">
                    <span class="close cursor" onclick="closeLungsModal()">&times;</span>
                    <div class="modal-content">

                        <div class="lungsSlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/lungs/normal-lungs.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/lungs/f1-lungs1.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/lungs/f2-lungs2.png" style="width:100%">
                        </div>

                        <div class="lungsSlides">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/lungs/normal-lungs.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">8 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">9 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>
                        <div class="lungsSlides">
                            <div class="numbertext">10 / 10</div>
                            <img src="img/lungs/f1-lungs1-thumbnail.png" style="width:100%">
                        </div>


                        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides2(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption2"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/normal-lungs.png" style="width:95%" onclick="currentSlide2(1)" alt="Normal Lung">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(2)" alt="Heart 2">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f2-lungs2.png" style="width:95%" onclick="currentSlide2(3)" alt="Heart 3">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(4)" alt="Heart 4">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(5)" alt="Heart 5">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(6)" alt="Heart 6">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(7)" alt="Heart 7">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(8)" alt="Heart 8">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(9)" alt="Heart 9">
                    </div>
                    <div class="column1">
                        <img class="demo2 cursor" src="img/lungs/f1-lungs1-thumbnail.png" style="width:95%" onclick="currentSlide2(10)" alt="Heart 10">
                    </div>   
                </div>     
                <!---------------------------------------------- End of Lungs Modal ------------------------------------------------------------->
            </div>        
            <!---------------------------------------------- End of Lungs Box ------------------------------------------------------------->
        </div>
        <!------------------------------------------------------- End of Container ------------------------------------------------------------->
    </body>
</html>