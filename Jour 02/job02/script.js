const button = document.getElementById("button");
var i = 0;

function showhide() {
    button.addEventListener("click", () => {
        if (i == 1) {
            document.getElementById("article").innerText = "";
            i--;
        }
        else if(i == 0){
            document.getElementById("article").innerText = "L'important n'est pas la chute, mais l'atterrissage.";
            i++;
        }
    });
}
showhide();
