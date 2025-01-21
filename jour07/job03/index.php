<?php
session_start();
$_SESSION["prenom"] = $_POST['prenom'];


if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

elseif (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

elseif (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}


foreach ($_SESSION['prenoms'] as $prenom) {
    echo $prenom."<br>";
}
?>

<form method="post">
    <label>prenom:</label>
    <input name="prenom" id="prenom" type="text" /><br>

    <button type="submit">Valider</button>
    <button type="submit" name="reset">Reset</button>
</form>