$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() === 0) {
      $(".header").removeClass("active");
    } else {
      $(".header").addClass("active");
    }
  });

  var scrollMagicController = new ScrollMagic();
  var tween = TweenMax.to("#circleObj", 5, {
    scale: 10,
    ease: Power1.easeInOut,
  });
  new ScrollScene({
    triggerElement: "#idea",
    duration: 600,
  })
    .setTween(tween)
    .addTo(scrollMagicController);

  new ScrollScene({ triggerElement: "#idea", offset: 0 })
    .setClassToggle("#idea", "active")
    .addTo(scrollMagicController);

  var cursor = $(".cursor");
  $(window).mousemove(function (e) {
    cursor.css({
      top: e.clientY - cursor.height() / 2,
      left: e.clientX - cursor.width() / 2,
    });
  });

  $(".btn, a").mouseenter(function () {
    $(cursor).css("transform", "scale(1.6)");
  });
  $(".btn, a").mouseleave(function () {
    $(cursor).css("transform", "scale(1)");
  });

  // credit card input start
  $("#cardNo").on("input", function () {
    var cardNumber = $(this).val().replace(/\s/g, "");
    var cardType = getCardType(cardNumber);
    $(this)
      .removeClass()
      .addClass(cardType + " " + "form-control");
    $(this).val(formatCardNumber(cardNumber));
  });
  function getCardType(cardNumber) {
    var cardTypes = {
      visa: /^4/,
      mastercard: /^5[1-5]/,
      amex: /^3[47]/,
      discover: /^6(?:011|5)/,
      dinersclub: /^3(?:0[0-5]|[68][0-9])/,
      jcb: /^(?:2131|1800|35\d{3})/,
    };

    for (var cardType in cardTypes) {
      if (cardNumber.match(cardTypes[cardType])) {
        return cardType;
      }
    }

    return "";
  }
  function formatCardNumber(cardNumber) {
    var formatted = "";
    for (var i = 0; i < cardNumber.length; i++) {
      if (i > 0 && i % 4 == 0) {
        formatted += " ";
      }
      formatted += cardNumber.charAt(i);
    }
    return formatted;
  }
  // credit card input end

  $(".radios-wrapper .form-check input").on("change", function () {
    $(".radios-wrapper .form-check label").removeClass("active");
    if ($(this).siblings("label").hasClass("active") == false) {
      $(this).siblings("label").addClass("active");
    }
  });

  $(".radios-wrapper .form-check input").change(function () {
    if (this.value === "option1") {
      // Perform task for option 1
      console.log("Option 1 selected");
    } else if (this.value === "option2") {
      // Perform task for option 2
      console.log("Option 2 selected");
    } else if (this.value === "option3") {
      // Perform task for option 3
      console.log("Option 3 selected");
    }
  });

  //  video player start
  if ($(window).width() > 991) {
    var video = $(".video-wrapper video")[0];
    var videoWrapper = $(".video-player-wrapper");
    var playPauseBtn = $(".video-wrapper .btn-play");

    videoWrapper.click(function () {
      if (video.paused) {
        video.play(); // Play the video
        playPauseBtn.html('<i class="fas fa-pause"></i>');
      } else {
        video.pause(); // Pause the video
        playPauseBtn.html('<i class="fas fa-play"></i>');
      }
    });
    $(".video-player-wrapper").mouseleave(function () {
      $(".video-wrapper .btn-play").css("display", "none");
    });
    $(".video-player-wrapper").mousemove(function (event) {
      $(".video-wrapper .btn-play").css("display", "flex");
      setTimeout(function () {
        $(".video-wrapper .btn-play").css("display", "none");
      }, 3000);
    });
  }
  //  video player end
  var dateToday = new Date();
  $(".appointment-picker").datepicker({
    showButtonPanel: false,
    minDate: dateToday,
  });


  $(".appointment-type .form-check input").change(function () {
    $('.appointment-type .form-check').removeClass('active');
    $('.appointment-type .form-check input:checked').parent().addClass('active');
  });



  
  var video = $('#videoPlayer')[0];
  $('.video-card').on('click', function(){
    var videoUrl = $(this).data('video-url');
    video.src = videoUrl;
    video.play();
  });
});

particlesJS(
  "particles-js",

  {
    particles: {
      number: {
        value: 80,
        density: {
          enable: true,
          value_area: 1400,
        },
      },
      color: {
        value: "#FF9100",
      },
      shape: {
        type: "circle",
        stroke: {
          width: 0,
          color: "#000000",
        },
        polygon: {
          nb_sides: 5,
        },
        image: {
          src: "img/github.svg",
          width: 100,
          height: 100,
        },
      },
      opacity: {
        value: 0.5,
        random: false,
        anim: {
          enable: false,
          speed: 1,
          opacity_min: 0.1,
          sync: false,
        },
      },
      size: {
        value: 5,
        random: true,
        anim: {
          enable: false,
          speed: 40,
          size_min: 0.1,
          sync: false,
        },
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#ffffff",
        opacity: 0.4,
        width: 1,
      },
      move: {
        enable: true,
        speed: 6,
        direction: "none",
        random: false,
        straight: false,
        out_mode: "out",
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200,
        },
      },
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: {
          enable: true,
          mode: "repulse",
        },
        onclick: {
          enable: true,
          mode: "push",
        },
        resize: true,
      },
      modes: {
        grab: {
          distance: 400,
          line_linked: {
            opacity: 1,
          },
        },
        bubble: {
          distance: 400,
          size: 40,
          duration: 2,
          opacity: 8,
          speed: 3,
        },
        repulse: {
          distance: 100,
        },
        push: {
          particles_nb: 4,
        },
        remove: {
          particles_nb: 2,
        },
      },
    },
    retina_detect: true,
    config_demo: {
      hide_card: false,
      background_color: "#b61924",
      background_image: "",
      background_position: "50% 50%",
      background_repeat: "no-repeat",
      background_size: "cover",
    },
  }
);
