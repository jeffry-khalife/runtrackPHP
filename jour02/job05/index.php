<?php 

for ($i = 2; $i <= 1000; $i++) {
    $premier = true; 

    for ($nb = 2; $nb <= sqrt($i); $nb++) {
        if ($i % $nb == 0) {
            $premier = false; 
            break;
        }
    }
    if ($premier) {
        echo "$i<br>";
    }
}
?>