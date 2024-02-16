$(document).ready(function () {
  // var
  var tab = [0, 1, 2, 3, 4, 5, 6]
  var victory = 0;

  // drag & drop
  $(function () {
    for (let b = 1; b <= 6; b++) {
      $("#arc" + b).draggable({ revert: true });
      $("#case" + b).droppable({
        accept: "#arc" + b,
        hoverClass: "case-drop",
        drop: function (event, ui) {
          $("#case" + b).append("<img src='./arc" + b + ".png'/>");
          $("#case" + b).addClass("case-valid");
          $("#arc" + b).remove();
          // victoire
          victory++;
          console.log(victory);
          if (victory == 6) {
            $("h1").text("Vous avez gagné !");
          }
        }
      });
    }
  });

  //shuffle
  function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
  }

  // button random
  $("button").click(function () {
    shuffle(tab);
    for (var i = 0; i <= 6; i++) {
      $("#arc" + i).css("order", tab[i]);
    }
  });

});

