
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
        dots1[j].className = dots1[j].className.replace(" active1", "");
    }
    slides1[slideHeartIndex - 1].style.display = "block";
    dots1[slideHeartIndex - 1].className += " active1";
    captionText1.innerHTML = dots1[slideHeartIndex - 1].alt;
}

/* Organ - Lungs JavaScript */
function openLungsModal() {
    document.getElementById("lungsModal").style.display = "block";
}

function closeLungsModal() {
    document.getElementById("lungsModal").style.display = "none";
}

var slideLungsIndex = 1;
showSlides2(slideLungsIndex);

function plusSlides2(n) {
    showSlides2(slideLungsIndex += n);
}

function currentSlide2(n) {
    showSlides2(slideLungsIndex = n);
}

function showSlides2(n) {
    var i;
    var slides2 = document.getElementsByClassName("lungsSlides");
    var dots2 = document.getElementsByClassName("demo2");
    var captionText2 = document.getElementById("caption2");
    if (n > slides2.length) {
        slideLungsIndex = 1;
    }
    if (n < 1) {
        slideLungsIndex = slides2.length;
    }
    for (i = 0; i < slides2.length; i++) {
        slides2[i].style.display = "none";
    }
    for (i = 0; i < dots2.length; i++) {
        dots2[i].className = dots2[i].className.replace(" active2", "");
    }
    slides2[slideLungsIndex - 1].style.display = "block";
    dots2[slideLungsIndex - 1].className += " active2";
    captionText2.innerHTML = dots2[slideLungsIndex - 1].alt;
}


/* Organ - Liver JavaScript */
function openLiverModal() {
    document.getElementById("liverModal").style.display = "block";
}

function closeLiverModal() {
    document.getElementById("liverModal").style.display = "none";
}

var slideLiverIndex = 1;
showSlides3(slideLiverIndex);

function plusSlides3(n) {
    showSlides3(slideLiverIndex += n);
}

function currentSlide3(n) {
    showSlides3(slideLiverIndex = n);
}

function showSlides3(n) {
    var i;
    var slides3 = document.getElementsByClassName("liverSlides");
    var dots3 = document.getElementsByClassName("demo3");
    var captionText3 = document.getElementById("caption3");
    if (n > slides3.length) {
        slideLiverIndex = 1;
    }
    if (n < 1) {
        slideLiverIndex = slides3.length;
    }
    for (i = 0; i < slides3.length; i++) {
        slides3[i].style.display = "none";
    }
    for (i = 0; i < dots3.length; i++) {
        dots3[i].className = dots3[i].className.replace(" active3", "");
    }
    slides3[slideLiverIndex - 1].style.display = "block";
    dots3[slideLiverIndex - 1].className += " active3";
    captionText3.innerHTML = dots3[slideLiverIndex - 1].alt;
}

/* Organ - Kidney JavaScript */
function openKidneyModal() {
    document.getElementById("kidneyModal").style.display = "block";
}

function closeKidneyModal() {
    document.getElementById("kidneyModal").style.display = "none";
}

var slideKidneyIndex = 1;
showSlides4(slideKidneyIndex);

function plusSlides4(n) {
    showSlides4(slideKidneyIndex += n);
}

function currentSlide4(n) {
    showSlides4(slideKidneyIndex = n);
}

function showSlides4(n) {
    var i;
    var slides4 = document.getElementsByClassName("kidneySlides");
    var dots4 = document.getElementsByClassName("demo4");
    var captionText4 = document.getElementById("caption4");
    if (n > slides4.length) {
        slideKidneyIndex = 1;
    }
    if (n < 1) {
        slideKidneyIndex = slides4.length;
    }
    for (i = 0; i < slides4.length; i++) {
        slides4[i].style.display = "none";
    }
    for (i = 0; i < dots4.length; i++) {
        dots4[i].className = dots4[i].className.replace(" active4", "");
    }
    slides4[slideKidneyIndex - 1].style.display = "block";
    dots4[slideKidneyIndex - 1].className += " active4";
    captionText4.innerHTML = dots4[slideKidneyIndex - 1].alt;
}
