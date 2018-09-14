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
