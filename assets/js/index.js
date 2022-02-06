// button click mini index.php
function myButtonMini() {
    let downMini = document.getElementById("collapse_btn");
    downMini.classList.toggle("clickButtonMini");
}

// click slider index.php
var sliderIndex = 1;
showSlides(sliderIndex);

function plusSlides(n) {
  showSlides(sliderIndex += n);
}

function currentSlider(n) {
    showSlides(sliderIndex = n);    
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    var dots = document.getElementsByClassName("sliders");
    if (n > slides.length) { sliderIndex = 1 }
    if (n < 1 ) { sliderIndex = slides.length }
    for ( i = 0; i < slides.length; i++ ) {
        slides[i].style.display = "none";
        }
    for ( i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[sliderIndex - 1].style.display = "block";
        dots[sliderIndex - 1].className += " active";
}


// auto slider index.php
// var sliderIndex = 0;
// showSlides();

// function showSlides() {
//     var i;
//     var slides = document.getElementsByClassName("hi");
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     sliderIndex++;
//     if (sliderIndex > slides.length) {
//         sliderIndex = 1;
//     }
//     slides[sliderIndex - 1].style.display = "block";
//     setTimeout(showSlides, 4000);
// }


// collapse button shop.php
function myCollapse() {
    let down = document.getElementById("content");
    down.classList.toggle("addCollapse");
}

function myCollapse2() {
    let down2 = document.getElementById("content2");
    down2.classList.toggle("addCollapse");
}

function myCollapse3() {
    let down3 = document.getElementById("content3");
    down3.classList.toggle("addCollapse");
}