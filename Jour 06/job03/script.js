
$(document).ready(function () {
    const screenS = window.matchMedia("(max-width: 767px)");
    const screenM = window.matchMedia("(min-width: 768px) and (max-width: 1559px)");
    const screenL = window.matchMedia("(min-width: 1600px)");
    window.addEventListener("resize", function () {
        if (screenS.matches) {
            $("section").css({"width": "85%"});
        }
        else if (screenM.matches) {
            $("section").css({"width": "40%"});
        }
        else if (screenL.matches) {
            $("section").css({"width": "22%"});
        }
    });
});
