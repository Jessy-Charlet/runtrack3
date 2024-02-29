<?php

/*** Connexion à la base de donnée */
$servername = 'localhost';
$username = 'root';
$password = '';
$bddname = 'utilisateurs';
if (isset($_POST["nom"])) {
    // On essaie de se connecter
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$bddname", $username, $password);
        // On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    // On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
    catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    // On récupère les valeurs
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // La requête SQL
    $sql = "SELECT INTO utilisateur (password, email)
    VALUES (:pass, :email)";
    $res = $pdo->prepare($sql);
    $exec = $res->execute(array("pass" => $password, "email" => $email));
    // On vérifie si la requête d'insertion a réussi
    if ($exec) {
        echo "Inscription réussi";
    } else {
        echo "Echec de l'insciption";
    }
    // On ferme la connexion
    $pdo = null;
}
?>

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
    <h1>Connexion</h1>
    <form id="connexionForm" action="index.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="connectEmail" name="email" placeholder="Email" required>
        <span id="emailError"></span>
        <div id="connectEmailError">
            <ul>
                <li class="connectEmail"></li>
            </ul>
        </div>

        <label for="password">Mot de passe:</label>
        <input type="password" id="connectPassword" name="password" placeholder="Mot de passe" required>
        <span id="passwordError"></span>
        <div id="connectPasswordError">
            <ul>
                <li class="connectPassword"></li>
            </ul>
        </div>

        <button type="submit" id="connexion">Connexion</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>