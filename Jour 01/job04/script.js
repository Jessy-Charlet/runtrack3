var year = 2024;

function bisextile(i){
    alert(
        i + (((i % 4 === 0 && i % 100 > 0) || (i % 400 === 0)) ? " est" : " n'est pas") + " bissextile" 
    );
}

bisextile(year);