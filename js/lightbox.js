
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
