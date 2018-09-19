let closeIcon = document.getElementsByClassName("drawer-close-icon")[0];

function closeDrawer() {
  console.log("I'm in the function");
  closeIcon.classList.add("closed-drawer");
}
$(document).ready(function() {
  console.log("I'm in the function");
  $(".drawer-close-icon").click(function() {
    $("#main-content").toggleClass("closed-drawer");
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
