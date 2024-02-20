
$(document).ready(function () {
    const screenS = window.matchMedia("(max-width: 767px)");
    const screenM = window.matchMedia("(min-width: 768px) and (max-width: 1559px)");
    const screenL = window.matchMedia("(min-width: 1600px)");
    window.addEventListener("resize", function () {
        if (screenS.matches) {
            $("section").css({ "width": "85%" });
            $("#myMenu").hide();
            $("#openBtn").show();

        }
        else if (screenM.matches) {
            $("section").css({ "width": "40%" });
            $("#myMenu").show();
            $("#openBtn").hide();
        }
        else if (screenL.matches) {
            $("section").css({ "width": "22%" });
            $("#myMenu").show();
            $("#openBtn").hide();
        }
    });

    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    
    function openNav() {
        sidenav.classList.add("active");
    }
    
    function closeNav() {
        sidenav.classList.remove("active");
    }
    
    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

});








