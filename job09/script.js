
function tri(nbr) {
    if (order == "asc") {
        for (var a = 1; a <= max; a++) {
            for (var b = 0; b <= nbr.length; b++) {
                if (nbr[b] == a) {
                    document.write(nbr[b] + "<br/>");
                }
            }
        }
    }
    else if (order == "desc") {
        for (var a = max; a >= 1; a--) {
            for (var b = 0; b <= nbr.length; b++) {
                if (nbr[b] == a) {
                    document.write(nbr[b] + "<br/>");
                }
            }
        }
    }
    else {
        document.write("erreur : aucun order selectionné")
    }
}

//Séléctionnez dans order "asc" pour trier par ordre croissant et "desc" pour trier par ordre décroissant.
var order = "asc";
var numbers = [42, 587, 54226, 2321, 1258, 4236, 9985, 54458, 95, 1, 22, 301, 542]
const max = Math.max(...numbers);

tri(numbers);