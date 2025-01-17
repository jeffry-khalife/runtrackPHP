<?php
$nombre1 = 2;
$nombre2 = 3;
$operateur = "-";
function calcule($nombre1,$operateur,$nombre2) {
    if ($operateur == "+") {
        $res = $nombre1 + $nombre2;
        return $res;
    }
    elseif ($operateur == "*") {
        $res = $nombre1 * $nombre2;
        return $res;
    }
    elseif ($operateur == "-") {
        $res = $nombre1 - $nombre2;
        return $res;
    }
    elseif ($operateur == "/") {
        $res = $nombre1 / $nombre2;
        return $res;
    }
    elseif ($operateur == "%") {
        $res = $nombre1 % $nombre2;
        return $res;
    }
    
}
echo calcule($nombre1,$operateur,$nombre2);

?>
</body>
</html>
