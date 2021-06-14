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
        <script>
            /* Skeleton Muscles JavaScript */
            function openModal() {
                document.getElementById("myModal").style.display = "block";
            }

            function closeModal() {
                document.getElementById("myModal").style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
            }


        </script>
        <script>
            /* Organ - Heart JavaScript */
            function openHeartModal() {
                document.getElementById("heartModal").style.display = "block";
            }

            function closeHeartModal() {
                document.getElementById("heartModal").style.display = "none";
            }

            var slideHeartIndex = 1;
            showSlides1(slideHeartIndex);

            function plusSlides1(m) {
                showSlides1(slideHeartIndex += m);
            }

            function currentSlide1(m) {
                showSlides1(slideHeartIndex = m);
            }
            function showSlides1(m) {
                var j;
                var slides1 = document.getElementsByClassName("heartSlides");
                var dots1 = document.getElementsByClassName("demo1");
                var captionText1 = document.getElementById("caption1");
                if (m > slides1.length) {
                    slideHeartIndex = 1;
                }
                if (m < 1) {
                    slideHeartIndex = slides1.length;
                }
                for (j = 0; j < slides1.length; j++) {
                    slides1[j].style.display = "none";
                }
                for (j = 0; j < dots1.length; j++) {
                    dots1[j].className = dots1[j].className.replace("active1", "");
                }
                slides1[slideHeartIndex - 1].style.display = "block";
                dots1[slideHeartIndex - 1].className += "active1";
                captionText1.innerHTML = dots1[slideHeartIndex - 1].alt;
            }
        </script>
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
                        <img src="img/1M15_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M18_0.5x.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M19_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M22_1.5x.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M23_0.9x.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M24_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M09_1.4x.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M13_0.8x.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M16_0.7x.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/1M17_0.8x.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                    </div>

                </div>
                <!------------------------------------------ End of Skeletal Muscle Light box ------------------------------------------------------->


                <!-------------------------------------------------- Skeletal Modal ----------------------------------------------------------------->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/1M15_0.7x.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/1M18_0.5x.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/1M19_0.7x.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/1M22_1.5x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/1M23_0.9x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/1M24_0.7x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/1M09_1.4x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 10</div>
                            <img src="img/1M13_0.8x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">9 / 10</div>
                            <img src="img/1M16_0.7x.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">10 / 10</div>
                            <img src="img/1M17_0.8x.jpg" style="width:100%">
                        </div>


                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M15_0.7x.jpg" style="width:100%" onclick="currentSlide(1)" alt="1M15">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M18_0.5x.jpg" style="width:100%" onclick="currentSlide(2)" alt="1M18">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M19_0.7x.jpg" style="width:100%" onclick="currentSlide(3)" alt="1M19">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M22_1.5x.jpg" style="width:100%" onclick="currentSlide(4)" alt="1M22">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M23_0.9x.jpg" style="width:100%" onclick="currentSlide(5)" alt="1M23">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M24_0.7x.jpg" style="width:100%" onclick="currentSlide(6)" alt="1M24">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M09_1.4x.jpg" style="width:100%" onclick="currentSlide(7)" alt="1M09">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M13_0.8x.jpg" style="width:100%" onclick="currentSlide(8)" alt="1M13">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M16_0.7x.jpg" style="width:100%" onclick="currentSlide(9)" alt="1M116">
                    </div>
                    <div class="column1">
                        <img class="demo cursor" src="img/1M17_0.8x.jpg" style="width:100%" onclick="currentSlide(10)" alt="1M17">
                    </div>
                </div>       
                <!------------------------------------------ End of Skeletal Muscle Modal ------------------------------------------------------->
            </div>         


            <!-------------------------------------------------- Heart Light box ---------------------------------------------------------------->
            <div class="col-12" >
                <h2 style="text-align:center; padding-top: 40px">Heart</h2>

                <div class="row">
                    <div class="column">
                        <img src="img/organ1heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(1)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ2heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(2)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ3heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(3)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ4heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(4)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ5heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(5)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ6heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(6)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ7heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(7)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ8heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(8)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ9heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(9)" class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="img/organ10heart.jpg" style="width:100%" onclick="openHeartModal();currentSlide1(10)" class="hover-shadow cursor">
                    </div>
                </div>

                <!------------------------------------------ End of Heart Light box -------------------------------------------------------------->
                <div id="heartModal" class="modal">
                    <span class="close cursor" onclick="closeHeartModal()">&times;</span>
                    <div class="modal-content">

                        <div class="heartSlides">
                            <div class="numbertext">1 / 10</div>
                            <img src="img/organ1heart.jpg" style="width:100%">
                        </div>

                        <div class="heartSlides">
                            <div class="numbertext">2 / 10</div>
                            <img src="img/organ2heart.jpg" style="width:100%">
                        </div>

                        <div class="heartSlides">
                            <div class="numbertext">3 / 10</div>
                            <img src="img/organ3heart.jpg" style="width:100%">
                        </div>

                        <div class="heartSlides">
                            <div class="numbertext">4 / 10</div>
                            <img src="img/organ4heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">5 / 10</div>
                            <img src="img/organ5heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">6 / 10</div>
                            <img src="img/organ6heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">7 / 10</div>
                            <img src="img/organ7heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">8 / 10</div>
                            <img src="img/organ8heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">9 / 10</div>
                            <img src="img/organ9heart.jpg" style="width:100%">
                        </div>
                        <div class="heartSlides">
                            <div class="numbertext">10 / 10</div>
                            <img src="img/organ10heart.jpg" style="width:100%">
                        </div>


                        <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides1(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption1"></p>
                        </div>

                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ1heart.jpg" style="width:100%" onclick="currentSlide1(1)" alt="Heart 1">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ2heart.jpg" style="width:100%" onclick="currentSlide1(2)" alt="Heart 2">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ3heart.jpg" style="width:100%" onclick="currentSlide1(3)" alt="Heart 3">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ4heart.jpg" style="width:100%" onclick="currentSlide1(4)" alt="Heart 4">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ5heart.jpg" style="width:100%" onclick="currentSlide1(5)" alt="Heart 5">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ6heart.jpg" style="width:100%" onclick="currentSlide1(6)" alt="Heart 6">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ7heart.jpg" style="width:100%" onclick="currentSlide1(7)" alt="Heart 7">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ8heart.jpg" style="width:100%" onclick="currentSlide1(8)" alt="Heart 8">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ9heart.jpg" style="width:100%" onclick="currentSlide1(9)" alt="Heart 9">
                    </div>
                    <div class="column1">
                        <img class="demo1 cursor" src="img/organ10heart.jpg" style="width:100%" onclick="currentSlide1(10)" alt="Heart 10">
                    </div>   
                </div>     
                <!---------------------------------------------- End of Heart Modal ------------------------------------------------------------->
            </div>         
        </div>
        <!------------------------------------------------------- End of Container ------------------------------------------------------------->
    </body>
</html>