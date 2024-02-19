$(document).ready(function () {

    async function getPokemon() {
        const url = 'pokemon.json';
        const fetcher = await fetch(url);
        const pokemon = await fetcher.json()
        for (const poke of pokemon){
            document.write("<p>" + pokemon.name + "</p>");
        };
    };

    $("#filtrer").click(function(){
        getPokemon();
        for (const poke of pokemon){
            document.write("<p>" + poke + "</p>");
        };
    })
});
