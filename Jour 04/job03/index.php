<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Runetrack3</title>
    <meta name="author" content="Jessy Charlet" />
    <meta name="description" content="Runetrack3" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<form method="" id="pokedex" action="">
    <label for="id">Numéro Pokedex de Kanto :</label>
<input type="text" id="id" id="id" />
<label for="nom">Nom du Pokémon :</label>
<input type="text" name="nom" id="nom" />
<label for="type">Type du Pokémon</label>
<select name="type" id="type">
  <option value="">--Type du Pokémon--</option>
  <option value="Grass">Grass</option>
  <option value="Poison">Poison</option>
  <option value="Fire">Fire</option>
  <option value="Flying">Flying</option>
  <option value="Water">Water</option>
  <option value="Normal">Normal</option>
  <option value="Electric">Electric</option>
  <option value="Ground">Ground</option>
  <option value="Fairy">Fairy</option>
  <option value="Psychic">Psychic</option>
  <option value="Fighting">Fighting</option>
  <option value="Rock">Rock</option>
  <option value="Steel">Steel</option>
  <option value="Ice">Ice</option>
  <option value="Ghost">Ghost</option>
  <option value="Dragon">Dragon</option>
</select>
<input type="button" id="filtrer" value="Filtrer" />
<ul></ul>
</form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>