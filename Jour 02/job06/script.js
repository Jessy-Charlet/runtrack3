function onKonamiCode(cb) {
    var input = '';
    var key = 'ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightba';
    document.addEventListener('keydown', function (e) {
      input += ("" + e.key);
      if (input === key) {
        return cb();
      }
      if (!key.indexOf(input)) return;
      input = ("" + e.key);
    });
  };
  
  onKonamiCode(function () {
    document.body.style.backgroundColor = "rgb(30,30,120)";
    document.querySelector("h1").textContent = "La Plateforme_";
  }); 