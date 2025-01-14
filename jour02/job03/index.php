<?php 
for ( $i=0; $i<=100; $i++)
{
    if ($i < 2) {
        echo "<i>$i</i>";
        echo "<br>";
    }
    elseif ($i === 42) {
        echo "La Plateforme_";
        echo "<br>";
    }
    elseif (24 < $i && $i < 51) {
        echo "<u>$i</u>";
        echo "<br>";
    }
    else {
    echo $i;
    echo "<br>";
    }       
}

?>