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
<header>
    <nav>
    <ul>
    <li><a href="*">Accueil</a></li>
    <li><a href="*">Inscription</a></li>
    <li><a href="*">Connexion</a></li>
    <li><a href="*">Rechercher</a></li>
</ul>
    </nav>
</header>
<main>
<form action="./index.php" method="post">

<fieldset>
  <legend>Civilité</legend>
  <div>
    <input type="radio" id="mr" name="civ" value="Mr" checked />
    <label for="mr">Mr</label>
  </div>
  <div>
    <input type="radio" id="mmr" name="civ" value="Mme" />
    <label for="mmr">Mme</label>
  </div>
</fieldset>

<fieldset>
<legend>Identité</legend>
    <label for="prenom">Prénom : </label>
    <input type="text" id="prenom" name="prenom" required />
    <label for="nom">Nom : </label>
    <input type="text" id="nom" name="nom" required />
    <label for="adresse">Adresse : </label>
    <input type="text" id="adresse" name="adresse" required />
</fieldset>

<fieldset>
<legend>Email</legend>
    <label for="email">Email : </label>
    <input type="email" id="email" pattern=".+@example\.com" size="30" required />
</fieldset>

<fieldset>
<legend>Mot de passe</legend>
    <label for="password">Mot de passe : </label>
    <input type="password" id="pass" name="password" minlength="8" required />
    <label for="confPassword">Confirmez le mot de passe : </label>
    <input type="confPassword" id="confPass" name="confPassword" minlength="8" required />
</fieldset>

<fieldset>
  <legend>Passions</legend>
  <div>
    <input type="checkbox" id="informatique" name="informatique" checked />
    <label for="informatique">informatique</label>
  </div>

  <div>
    <input type="checkbox" id="voyages" name="voyages" />
    <label for="voyages">voyages</label>
  </div>
  <div>
    <input type="checkbox" id="sport" name="sport" />
    <label for="sport">sport</label>
  </div>
  <div>
    <input type="checkbox" id="lecture" name="lecture" />
    <label for="lecture">lecture</label>
  </div>
</fieldset>

<input type="button" id="valider" value="valider" />

</form>
</main>
<footer>
<ul>
    <li><a href="*">Accueil</a></li>
    <li><a href="*">Inscription</a></li>
    <li><a href="*">Connexion</a></li>
    <li><a href="*">Rechercher</a></li>
</ul>
</footer>

</body>

</html>