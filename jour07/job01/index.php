<?php
$nbvisites = 0  ;

session_start();
if (isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = $_SESSION['nbvisites'] +1 ;
}
else {
$_SESSION["nbvisites"] = "1";
}
echo "Nombre de visite : " . $_SESSION["nbvisites"] . ".<br>";

?>
