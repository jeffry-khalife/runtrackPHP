<?php 
$premier = false;
for ($i = 2; $i <= 1000; $i++) { 
    $valeur = 2
    for ($nb = 2; $nb % $i == 0; $nb++) {
        if ($i % $nb == 0) {
            $premier = true; 
            break;
        }
    }
    if ($premier) {
        echo "$i<br>";
    }
}
?>