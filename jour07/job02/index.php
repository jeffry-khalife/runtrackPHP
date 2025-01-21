<?php
$nbvisites = 1;
if (isset($_COOKIE["nbvisites"])) {
    $nbvisites = $_COOKIE["nbvisites"] + 1;
}

setcookie("nbvisites", $nbvisites); 

if (isset($_POST['reset'])) {
    $nbvisites = 1;
    setcookie("nbvisites", $nbvisites);
}

echo "Nombre de visites : " . $nbvisites;
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>



