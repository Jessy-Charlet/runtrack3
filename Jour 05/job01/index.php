<?php
    session_start();
/*** Connexion à la base de donnée */
$servername = 'localhost';
$username = 'root';
$password = '';
$bddname = 'utilisateurs';
if (isset($_POST["email"])) {
// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $bddname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des utilisateurs
$query = "SELECT * FROM utilisateur";
$result = $conn->query($query);


while ($row = $result->fetch_assoc()) {

    if ($row["email"] == $_POST["email"] && $row["password"] == $_POST["password"]){
        $_SESSION["prenom"] = $row["prenom"];
    }
}
// Fermeture de la connexion à la base de données
$conn->close();
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8" />
        <title>Runetrack3</title>
        <meta name="author" content="Jessy Charlet" />
        <meta name="description" content="Runetrack3" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <?php

    // Vérifie si l'utilisateur est connecté
    if (isset($_SESSION["prenom"])) {
        echo '<p>Bonjour ' . $_SESSION["prenom"] . '</p>';
    } else {
        echo '<a href="inscription.php">Inscription</a> | <a href="connexion.php">Connexion</a>';
    }
    ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>