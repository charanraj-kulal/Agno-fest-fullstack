(function ($) {
  ("use strict");

  // // Spinner
  // var spinner = function () {
  //   setTimeout(function () {
  //     if ($("#spinner").length > 0) {
  //       $("#spinner").removeClass("show");
  //     }
  //   }, 1);
  // };
  // spinner();

  // Loading Video
  var loadingScreen = function () {
    var video = document.getElementById("loading-video");
    var sources = video.getElementsByTagName("source");
    var selectedSource = null;

    function selectAppropriateSource() {
      for (var i = 0; i < sources.length; i++) {
        var media = sources[i].getAttribute("media");
        if (!media || window.matchMedia(media).matches) {
          selectedSource = sources[i];
          break;
        }
      }
    }

    function loadVideo() {
      selectAppropriateSource();
      if (selectedSource) {
        video.src = selectedSource.src;
        video.load();
      }
    }

    loadVideo();

    window.addEventListener("resize", loadVideo);

    $(window).on("load", function () {
      if (video.readyState === 4) {
        // Video is ready to play
        setTimeout(function () {
          $("#loading-screen").fadeOut("slow", function () {
            $(this).remove();
          });
        }, 3000); // Adjust this value to control how long the video plays (in milliseconds)
      } else {
        // Video is not ready, wait for it
        video.addEventListener(
          "canplaythrough",
          function () {
            setTimeout(function () {
              $("#loading-screen").fadeOut("slow", function () {
                $(this).remove();
              });
            }, 2000);
          },
          { once: true }
        );
      }
    });
  };

  // Call the function when the DOM is ready
  $(document).ready(loadingScreen);

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  //nav active
  $(".nav-item").click(function () {
    // Remove active class from all nav items
    $(".nav-item").removeClass("active");

    // Add active class to the clicked nav item
    $(this).addClass("active");
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Modal Video
  // $(document).ready(function () {
  //   var $videoSrc;
  //   $(".btn-play").click(function () {
  //     $videoSrc = $(this).data("src");
  //   });
  //   console.log($videoSrc);

  //   $("#videoModal").on("shown.bs.modal", function (e) {
  //     $("#video").attr(
  //       "src",
  //       $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
  //     );
  //   });

  //   $("#videoModal").on("hide.bs.modal", function (e) {
  //     $("#video").attr("src", $videoSrc);
  //   });
  // });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 24,
    dots: true,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top <= 150 && // Adjusted to trigger earlier
      rect.bottom >= 150 // Adjusted to keep section active while scrolling
    );
  }

  // Function to update active nav item based on scroll position
  function updateActiveNavItem() {
    $("section[id]").each(function () {
      var sectionId = $(this).attr("id");

      if (isElementInViewport(this)) {
        $(".nav-item.nav-link").removeClass("active");
        $('a.nav-item.nav-link[href="#' + sectionId + '"]').addClass("active");
      }
    });
  }

  // Call the function on scroll and on page load
  $(window).on("scroll load resize", updateActiveNavItem);

  // Smooth scrolling for nav links
  $('a.nav-item.nav-link[href^="#"]').on("click", function (e) {
    e.preventDefault();
    var target = $(this.hash);
    if (target.length) {
      $("html, body").animate(
        {
          scrollTop: target.offset().top - 100, // Adjust for navbar height
        },
        1000
      );
    }
  });
})(jQuery);
