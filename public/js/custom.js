// Menu Toggle Script
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

//Tooltip
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});