$("#show").hide();

$(document).ready(function(){
    $("#hide").click(function(){
      $("p").hide();
      $("#show").show();
      $("#hide").hide();
    });
    $("#show").click(function(){
      $("p").show();
      $("#hide").show();
      $("#show").hide();
    });
  });