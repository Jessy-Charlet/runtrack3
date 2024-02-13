const button = document.getElementById("button");
const cita = document.getElementById("citation").innerHTML;
function citation() {
    
    button.addEventListener("click", () => {
        console.log(cita);
    });
}
citation();
