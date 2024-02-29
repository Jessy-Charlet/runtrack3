<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Runetrack3</title>
    <meta name="author" content="Jessy Charlet" />
    <meta name="description" content="Runetrack3" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Inscription</h1>
    <form id="inscriptionForm" action="connexion.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" placeholder="Nom" required>
        <div id="nomError">
            <ul>
                <li class="nom"><span></span> Indiquez votre nom</li>
            </ul>
        </div>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
        <div id="prenomError">
            <ul>
                <li class="prenom"><span></span> Indiquez votre prénom</li>
            </ul>
        </div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <div id="emailError">
            <ul>
                <li id="email1"><span></span> Ne doit pas être déjà enregistré</p></li>
                <li id="email2"><span></span> Doit être un email valide</li>
            </ul>
        </div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <div id="passwordError">
            <ul>
                <li class="minuscule"><span></span> Au moins une minuscule</li>
                <li class="majuscule"><span></span> Au moins une majuscule</li>
                <li class="chiffre"><span></span> Au moins un chiffre</li>
                <li class="symbole"><span></span> Au moins un caractère spécial</br>(!@#$%^&*)</li>
                <li class="taille"><span></span> Au moins 8 caractères</li>
            </ul>
        </div>

        <label for="confirmPassword">Confirmer le mot de passe:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmation de mot de passe" required>
        <div id="confirmPasswordError">
            <ul>
                <li class="verifpassword"><span></span> Doit être égale au mot de passe</li>
            </ul>
        </div>

        <button type="submit" id="inscription">Inscription</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>