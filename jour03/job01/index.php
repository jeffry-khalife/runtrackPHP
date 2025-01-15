<?php 
foreach ([200, 204, 173, 98, 171, 404, 45] as $valeur) {
    if ($valeur % 2 == 1) {
      echo "$valeur est impair </br>";
    }
    else {
      echo "$valeur est pair </br>";
    }
}
?>