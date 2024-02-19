$(document).ready(function() {
    async function callText(){
        const url = 'expression.txt';
        const fetcher = await fetch(url);
        const txt = await fetcher.text()
        document.querySelector("p").innerText = txt;
    };
    $("#button").click(function(){
        callText();
    });
  });
