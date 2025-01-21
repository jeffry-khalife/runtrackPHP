<?php
$style = isset($_POST['style']) ? $_POST['style'] : 'style2'; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="<?php echo $style; ?>.css"> 
</head>
<body>
    <div class="form-container">
        <h1>Choisir un style</h1>
        <form action="index.php" method="POST">
            <label for="style">Choisir un style : </label>
            <select name="style" id="style">
                <option value="style2" <?php if ($style == 'style2') echo 'selected'; ?>>Style 1</option>
                <option value="style3" <?php if ($style == 'style3') echo 'selected'; ?>>Style 2</option>
                <option value="style1" <?php if ($style == 'style1') echo 'selected'; ?>>Style 3</option>
            </select>
            <button type="submit">Appliquer</button>
        </form>
    </div>
</body>
</html>
