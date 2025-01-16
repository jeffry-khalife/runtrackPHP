<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
<form action="index.php" method="get">
   <label>Nombre:</label>
   <input name="nombre" id="nombre" type="text" /><br>

   <button type="submit">Valider</button>
</form>
<?php

if ($_GET["nombre"] % 2 === 0) {
    echo $_GET["nombre"]." est un nombre pair";
  }
else {
    echo $_GET["nombre"]." est nombre impair";
  }

?>
</body>
</html>