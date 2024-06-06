(function ($) {
  "use strict"; // Start of use strict

  // Scroll to top button appear
  $(document).on("scroll", function () {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 150) {
      $(".scroll-to-top").fadeIn();
    } else {
      $(".scroll-to-top").fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on("click", "a", function (e) {
    var $anchor = $(this);
    $("html, body")
      // .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top,
        },
        1000
      );
    e.preventDefault();
  });
})(jQuery); // End of use strict

function playPauseVideo() {
  var video = document.getElementById("home-video");

  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
}

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
