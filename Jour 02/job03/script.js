const button = document.getElementById("button");
var i = 0;

function addone() {
    button.addEventListener("click", () => {
        i++
            document.getElementById("article").textContent = i;
        }
    );
}
addone();
