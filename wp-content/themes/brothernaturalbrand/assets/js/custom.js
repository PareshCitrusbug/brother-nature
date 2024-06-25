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
		$("img.video-thumbnail").hide();
		$("button#playbtn").addClass("play-btn-hide");
		$("button#pausebtn").addClass("pause-btn-show");
	} else {
		video.pause();
		$("img.video-thumbnail").show();
		$("button#pausebtn").removeClass("pause-btn-show");
		$("button#playbtn").removeClass("play-btn-hide");
	}
}


$(document).ready(function () {
  // $("#contact-form").validate();
 	
	
	
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

	
  $("#contact-form").validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
      },
      phone: {
        required: true,
        phoneUS: true,
      },
    },
    messages: {
      name: {
        required: "Name field is required.",
      },
      email: {
        required: "Email field is required.",
      },
      phone: {
        required: "Phone field is required.",
        phoneUS: "Enter valid phone number",
      },
    },
    submitHandler: function (form) {
      // for demo
      $.ajax({
        data: { action: "contact_form", name: name },
        type: "post",
        url: ajaxurl,
        success: function (data) {
          console.log(data); //should print out the name since you sent it along
        },
      });
      return false;
    },
  });
});
