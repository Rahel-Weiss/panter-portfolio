const closeIcon = document.getElementsByClassName("drawer-close-icon")[0];

$(document).ready(function() {
  const { Gallery } = window;
  const $bus = (window.$bus = $({}));
  const $mainContent = $("#main-content");
  const $readTheBrief = $(".js-read_the_brief");

  const toggleDrawer = (open = false) => {
    const drawerState = $mainContent.attr("data-drawer");
    const newState = drawerState === "open" ? "closed" : "open";

    $mainContent.attr("data-drawer", newState);
  };

  $bus
    .on("drawer:toggle", () => {
      toggleDrawer();
      imageSwiper.update();
    })
    .on("drawer:open", () => {
      toggleDrawer(true);
    })
    .on("drawer:close", () => {
      toggleDrawer(false);
    });

  $readTheBrief.on("click", () => {
    $bus.trigger("drawer:toggle");

    setTimeout(function() {
      imageSwiper.update();
      captionSwiper.update();
    }, 500);
  });

  // Smooth scrolling

  var scrollLink = $(".scroll");

  scrollLink.click(function(e) {
    e.preventDefault();
    $("body,html").animate(
      {
        scrollTop: $(this.hash).offset().top
      },
      1000
    );
  });

  // Go to Full Screen

  const arrow = document.getElementById("arrow");

  arrow.onclick = function() {
    header.classList.add("sticky");
    arrow.classList.add("clear");
    // backgroundSquare.classList.add("sticky-background");
    for (var i = 0; i < nameCircles.length; i++) {
      nameCircles[i].classList.add("animation-2");
    }
    contactCircle.classList.add("animation-2");
  };

  // Swiper

  var captionSwiper = new Swiper(".text-swiper", {
    // Optional parameters
    loop: true,
    centeredSlides: true,
    allowSlideNext: true
  });

  var imageSwiper = new Swiper(".image-swiper ", {
    // Optional parameters
    loop: true,
    centeredSlides: true,
    innit: true,

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    pagination: {
      el: ".swiper-pagination"
    },

    on: {
      slideNextTransitionStart: function() {
        var imageData = $(".image-swiper .swiper-slide-active").data(
          "projectName"
        );
        var textData = $(".text-swiper .swiper-slide-active").data(
          "projectTitle"
        );

        if (imageData !== textData) {
          captionSwiper.slideNext();
        } else {
          console.log("its the same");
        }
      },
      slidePrevTransitionStart: function() {
        var imageData = $(".image-swiper .swiper-slide-active").data(
          "projectName"
        );
        var textData = $(".text-swiper .swiper-slide-active").data(
          "projectTitle"
        );

        if (imageData !== textData) {
          captionSwiper.slidePrev();
        } else {
          console.log("its the same");
        }
      }
    }
  });
});

// Sticky Header

window.onscroll = function() {
  stickyNav();
};

const header = document.getElementById("nav");
const arrow = document.getElementById("arrow");
const start = document.getElementById("start");
const backgroundSquare = document.getElementById("background-square");
const nameCircles = document.getElementsByClassName("name-circle");
const contactCircle = document.getElementsByClassName("contact-circle")[0];

const stickyOffSet = header.offsetTop;

function stickyNav() {
  if (window.pageYOffset > stickyOffSet) {
    header.classList.add("sticky");
    arrow.classList.add("clear");
    backgroundSquare.classList.add("sticky-background");
    for (var i = 0; i < nameCircles.length; i++) {
      nameCircles[i].classList.add("animation-2");
    }
    contactCircle.classList.add("animation-2");
  } else {
    header.classList.remove("sticky");
    arrow.classList.remove("clear");
  }
}
