const ferie = ["10", "13", "14", "84", "94", "204", "147", "157", "110", "1110", "2511"];
const day = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
const month = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "octobre", "Novembre", "Decembre"];
var jf = 0;

const date = new Date("2024-04-05");

function jourtravaille(date) {
    const jour = day[date.getDay()];
    const mois = month[date.getMonth()];
    const num = [date.getDate()];

    if (date.getDay() == 0 || date.getDay() == 6) {
        return alert("Non, " + jour + " " + num + " " + mois + " 2024 est un week-end.");
    }
    else {
        for (var i = 0; i < ferie.length; i++) {
            if (String(num) + String(date.getMonth())  == ferie[i]) {
                return alert("le " + jour + " " + num + " " + mois + " 2024 est est un jour férié.");
            }
            else {
                jf++;
            }
        }
        if (jf != 0) {
            jf=0;
            return alert("le " + jour + " " + num + " " + mois + " 2024 est est un jour travaillé.");
        }
    }
}

jourtravaille(date);