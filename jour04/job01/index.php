<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Votre nom :</label>
   <input name="nom" id="nom" type="text" /><br>

   <label>Votre Prenom :</label>
   <input name="prenom" id="prenom" type="text" /><br>

   <label>Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>
<?php
$nombreget = 0 ;
foreach ($_GET as $key => $values) {
    if ($values) { 
        $nombreget++;
    }
}
echo "le nombre de get est ",$nombreget;

?>
</body>
</html>