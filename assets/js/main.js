let closeIcon = document.getElementsByClassName("drawer-close-icon")[0];

// function closeDrawer() {
//   closeIcon.classList.add("closed-drawer");
// }

$("#accountloginsignup h1").click(function() {
  if ($("#takeonebar").hasClass("slamdown")) {
    $("#takeonebar").removeClass("slamdown");
  } else {
    $("#takeonebar").addClass("slamdown");
  }
});

$(document).ready(function() {
  $(".drawer-close-icon").click(function() {
    if ($("#main-content").hasClass("closed-drawer")) {
      $("#main-content").removeClass("closed-drawer");
      $("#main-content").addClass("open-drawer");
    } else if ($("#main-content").hasClass("open-drawer")) {
      $("#main-content").removeClass("open-drawer");
      $("#main-content").addClass("closed-drawer");
    }
  });
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

const downArrow = document.getElementById("arrow");
const mainContent = document.getElementById("main-content");

downArrow.onclick = function() {
  mainContent.classList.toggle("fullscreen");
};
