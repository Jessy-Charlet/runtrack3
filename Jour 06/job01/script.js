$(document).ready(function () {
const screenS = window.matchMedia("(max-width: 1280px)");
const screenM = window.matchMedia("(min-width: 1280px) and (max-width: 1680px)");
const screenL = window.matchMedia("(min-width: 1680px) and (max-width: 1920px)");
window.addEventListener("resize", function () {
    if (screenS.matches) {
        document.getElementById("style").setAttribute("href", "style4.css");
    }
    else if(screenM.matches){
        document.getElementById("style").setAttribute("href", "style3.css");
    }
    else if(screenL.matches){
        document.getElementById("style").setAttribute("href", "style2.css");
    }
    else{
        document.getElementById("style").setAttribute("href", "style1.css");
    }
});
});
