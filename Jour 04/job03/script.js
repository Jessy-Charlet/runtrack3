$(document).ready(function () {

    function getPokemon(pokeid, pokename, poketype) {
        fetch('pokemon.json')
            .then(res => res.json())
            .then(data => {
                for (const poke of data) {
                    if (poke.id == pokeid || poke.name.french.toUpperCase() == pokename.toUpperCase() || poke.type[0] == poketype || poke.type[1] == poketype) {
                        $("#content").append("<div class='poke'><h2>#" + poke.id + " " + poke.name.french +
                        "</h2><span>" + poke.name.japanese +
                        "</span><p>Type : " + poke.type +
                        "</p><p>HP : " + poke.base.HP +
                        "</br>Attack : " + poke.base.Attack +
                        "</br>Defense : " + poke.base.Defense +
                        "</br>Sp. Attack : " + poke.base["Sp. Attack"] +
                        "</br>Sp. Defense : " + poke.base["Sp. Defense"] +
                        "</br>Speed : " + poke.base.Speed + "</p></div>");
                    }
                }
            })
    }

     $("#filtrer").click(function(){
        var pokeid = document.getElementById("id").value;
        var pokename = document.getElementById("nom").value;
        var poketype = document.getElementById("type").value;
         getPokemon(pokeid, pokename, poketype);
       })
});
