$(document).ready(function () {
  $('.service-title').matchHeight();
})

$(document).ready(function () {
  $('.testimonial-text').matchHeight();
})

$(document).ready(function () {
  $('.service-list').matchHeight();
})

$(document).ready(function () {
  $('.service-inner-title').matchHeight();
})

$(document).ready(function () {
  $('.service-inner-full').matchHeight();
})

$(document).ready(function () {
  $('.services').matchHeight();
})


$(document).ready(function () {
  $('.service-list-title').matchHeight();
})

// SIDE NAV
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


//FOR SIDENAV DROPDOWN

$(".artha-btn").click(function () {
  $("ul .artha-show").toggleClass("show3");
  $("ul .fourth").toggleClass("rotate");
});
// FIXED NAVBAR
$(window).scroll(function () {
  if ($(this).scrollTop() > 120) {
    $(".header-wrapper").addClass("fixed");
  } else {
    $(".header-wrapper").removeClass("fixed");
  }
});

//ADD BG TO NAVBAR
$(window).scroll(function () {
  if ($(this).scrollTop() > 120) {
    $(".logos").addClass("whitebg");
  } else {
    $(".logos").removeClass("whitebg");
  }
});

//IMAGE SIZE
document.addEventListener("scroll", function () {
  scrollHeight = window.pageYOffset;
  document.getElementsByClassName("navlogo")[0].style.width = scrollHeight >= 120 ? "150px" : "";
}, false);


//TOP CAROUSEL
$('.owl-carousel.top-owl').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

//Bread Slider
$('.owl-carousel.next-owl').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  touchDrag: false,
  mouseDrag: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

//Match title height
function MatchHeight() {
  $('.match')
    .matchHeight({});
}

//Functions that run when all HTML is loaded
$(document).ready(function () {
  MatchHeight();
});


// ScrollToTop
mybutton = document.getElementById("myBtn");
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// TESTIMONIALS
$(document).ready(function ($) {
  $(".testimonials .owl-carousel").owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });
});

$('.teams-carousel .owl-carousel.slider-team').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})


//PORTFOLIO DETAILS
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 0,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});


$('.carousel-testimonial').owlCarousel({
  loop:true,
  margin:0,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:false
      }
  }
})


    /* BLUR EFFECT */

    var $container = $('.article_center2'),
        $articles = $container.children('article'),
        timeout;

    $articles.on('mouseenter', function(event) {
        var $article = $(this);
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            if ($article.hasClass('active')) return false;
            $articles.not($article).removeClass('active').addClass('blur');
            $article.removeClass('blur').addClass('active');
        }, 75);
    });
    $('.article_center2', '#services ').on('mouseleave', function(event) {
        clearTimeout(timeout);
        $articles.removeClass('active blur');
    });


  

  	/* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });



/*         import React from "react";
import ReactDOM from "react-dom";
import Countdown from "react-countdown";

ReactDOM.render(
  <Countdown
    date={Date.now() + 10000}
    intervalDelay={0}
    precision={3}
    renderer={props => <div>{props.total}</div>}
  />,
  document.getElementById("root")
); */