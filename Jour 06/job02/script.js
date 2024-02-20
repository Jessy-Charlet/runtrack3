$(document).ready(function () {
    const screenS = window.matchMedia("(max-width: 1280px)");
    const screenM = window.matchMedia("(min-width: 1280px) and (max-width: 1680px)");
    const screenL = window.matchMedia("(min-width: 1680px) and (max-width: 1920px)");
    window.addEventListener("resize", function () {
        if (screenS.matches) {
            document.body.style.backgroundColor = "#ffffff";
        }
        else if (screenM.matches) {
            document.body.style.backgroundColor = "#275fa0";
        }
        else if (screenL.matches) {
            document.body.style.backgroundColor = "#ffca4b";
        }
    });
});
