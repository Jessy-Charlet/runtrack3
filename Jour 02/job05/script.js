const foot = document.querySelector("footer");
var i = 0;

function load(){
    var h = document.documentElement, 
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';
    i = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;

    foot.style.width = i + "%";
};

window.addEventListener('scroll', () => { load(); console.log(i);});



/*const foot = document.querySelector("footer");
var i = 0;

function load(){
    wh = window.scrollY;
    bh = document.body.clientHeight;
    i = wh / bh * 100;
    foot.style.width = i + "%";
};

window.addEventListener('scroll', () => { load(); console.log(i);});
*/