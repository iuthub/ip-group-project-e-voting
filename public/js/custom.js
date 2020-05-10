// Menu Toggle Script
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

//Tooltip
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

//search
$(document).ready(function(){
  $('#search').keyup(function(){
    search_table($(this).val());
  });

  function search_table(value){
    $('#search_flag tr').each(function(){
      var found = 'false';
      $(this).each(function(){
        if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
          found = 'true';
        }
      });
      if(found == 'true'){
        $(this).show();
      }
      else{
        $(this).hide();
      }
    });
  }
});