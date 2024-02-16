<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Runetrack3</title>
    <meta name="author" content="Jessy Charlet" />
    <meta name="description" content="Runetrack3" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link href="./style.css" rel="stylesheet" />
</head>

<body>
    <button>Mélanger</button>
    <h1></h1>
    <div class='conteneur'>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<div id='case" . $i . "' class='case'></div>";
        };
        ?>
    </div>
    <div class='conteneur' id='arcEnCiel'>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<img class='arc' id='arc" . $i . "' src='./arc" . $i . ".png'>";
        };
        ?>
    </div>
    <script src="./script.js"></script>
</body>

</html>