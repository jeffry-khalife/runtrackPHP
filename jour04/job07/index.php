<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Largeur:</label>
   <input name="largeur" id="largeur" type="text" /><br>

   <label>Hauteur:</label>
   <input name="hauteur" id="hauteur" type="text" />
   
   <button type="submit">Valider</button>
</form>
<?php

if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {

    // for ($j = 1; $j <= $_GET["hauteur"]; $j++) { 
    //     echo "/";
    //     for ($i = 1; $i <= $_GET["largeur"]-1; $i++) { 
    //         echo "_";
    //     }
    //     echo "\<br>";
    // }

    for ($i = 1; $i <= $_GET["largeur"]; $i++) {
        echo "_";
    }
    echo "<br>";

    for ($j = 1; $j <= $_GET["hauteur"]; $j++) { 
        echo "|";
        for ($i = 1; $i <= $_GET["largeur"]; $i++) { 
            echo "&nbsp&nbsp";
        }
        echo "|<br>";
    }

    for ($i = 1; $i <= $_GET["largeur"]; $i++) {
        echo "_";
    }
}




?>
</body>
</html>