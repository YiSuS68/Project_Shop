// button click
let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".header-setup");


btn.onclick = function() {
    sidebar.classList.toggle("active");
}


// click slider
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
        slides[sliderIndex -1].style.display = "block";
        dots[sliderIndex - 1].className += " active";
}


// auto slider
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


// click minisize

document.getElementById("aboutUs").addEventListener("click",  function() {
    console.log("aaa");
  });

// new

  $('.brand-slider').each(function() {
    var $this = $(this);
    var $group = $this.find('.slide_group');
    var $slides = $this.find('.slide');
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;
    
    function move(newIndex) {
      var animateLeft, slideLeft;
      
      advance();
      
      if ($group.is(':animated') || currentIndex === newIndex) {
        return;
      }
      
      bulletArray[currentIndex].removeClass('sunpo');
      bulletArray[newIndex].addClass('sunpo');
      
      if (newIndex > currentIndex) {
        slideLeft = '100%';
        animateLeft = '-100%';
      } else {
        slideLeft = '-100%';
        animateLeft = '100%';
      }
      
      $slides.eq(newIndex).css({
        display: 'block',
        left: slideLeft
      });
      $group.animate({
        left: animateLeft
      }, function() {
        $slides.eq(currentIndex).css({
          display: 'none'
        });
        $slides.eq(newIndex).css({
          left: 0
        });
        $group.css({
          left: 0
        });
        currentIndex = newIndex;
      });
    }
    

    function advance() {
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        if (currentIndex < ($slides.length - 1)) {
          move(currentIndex + 1);
        } else {
          move(0);
        }
      }, 4000);
    }
    
    // nut di tiep
    $('.next_btn').on('click', function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    });
    

    // nut quay lai
    $('.previous_btn').on('click', function() {
      if (currentIndex !== 0) {
        move(currentIndex - 1);
      } else {
        move(3);
      }
    });
    
    
    $.each($slides, function(index) {
      var $button = $('<a class="slide_btn">&bull;</a>');
      
      if (index === currentIndex) {
        $button.addClass('sunpo');
      }
      $button.on('click', function() {
        move(index);
      }).appendTo('.slide_buttons');
      bulletArray.push($button);
    });
    
    advance();
  });