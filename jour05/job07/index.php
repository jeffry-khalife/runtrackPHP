<?php
function gras($str) {
    $resultat = "";
    $mot = "";

    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];
         
    }

    return $resultat;
}

// function cesar($str) {
//     $resultat = "";
   
//     return $resultat;
// }

// function plateforme($str) {
   
// }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>

    <form method="post">
        <label for="str">Texte : </label>
        <input type="text" name="str" id="str">
        
        <label for="transformation">Transformation :</label>
        <select name="transformation" id="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">plateforme</option>
        </select>

        <button type="submit">Appliquer</button>
    </form>


</body>
</html>
