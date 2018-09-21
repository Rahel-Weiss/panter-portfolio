const closeIcon = document.getElementsByClassName("drawer-close-icon")[0];

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
  const { Gallery } = window;
  const $bus = (window.$bus = $({}));
  const $mainContent = $("#main-content");
  const $readTheBrief = $(".js-read_the_brief");

  const toggleDrawer = (open = false) => {
    const drawerState = $mainContent.attr("data-drawer");

    let state = drawerState === "open" ? "closed" : "open";
    if (state === false) {
      state = "closed";
    }
    if (state === true) {
      state = "open";
    }

    $mainContent.attr("data-drawer", state);
  };

  $bus
    .on("drawer:toggle", () => {
      toggleDrawer();
    })
    .on("drawer:open", () => {
      toggleDrawer(true);
    })
    .on("drawer:close", () => {
      toggleDrawer(false);
    });

  $readTheBrief.on("click", () => {
    $bus.trigger("drawer:toggle");
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

  // downArrow.onclick = function() {
  //   mainContent.classList.toggle("fullscreen");
  // };
});
