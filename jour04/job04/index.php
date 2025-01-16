<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="post">
   <label>Votre nom :</label>
   <input name="nom" id="nom" type="text" /><br>

   <label>Votre Prenom :</label>
   <input name="prenom" id="prenom" type="text" /><br>

   <label>Votre âge :</label>
   <input name="age" id="age" type="number" />

   <button type="submit">Valider</button>
</form>
<?php
if (isset($_POST)) {
        echo "<table border='1'>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Age</td>
            </tr>
            <tr>
                <td>{$_POST['nom']}</td>
                <td>{$_POST['prenom']}</td>
                <td>{$_POST['age']}</td>
            </tr>
                </table>";
}
?>
</body>
</html>