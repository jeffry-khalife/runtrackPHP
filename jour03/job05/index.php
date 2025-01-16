<?php
/*
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$voyelle = "aeiouAEIOU";
$consonne = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";

$dic = [
    "voyelle" => 0,
    "consonne" => 0
];

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelle, $str[$i]) !== false) {
        $dic["voyelle"]++;
    } elseif (strpos($consonne, $str[$i]) !== false) {
        $dic["consonne"]++;
    }
}

echo "<table border='3'>
            <tr>
                <td>Voyelle</td>
                <td>Consonne</td>
            </tr>
            <tr>
                <td>{$dic['voyelle']}</td>
                <td>{$dic['consonne']}</td>
            </tr>
      </table>";

*/

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$voyelle = "aeiouAEIOU";
$consonne = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";

$dic = [
    "voyelle" => 0,
    "consonne" => 0
];

$i = 0;
while (isset($str[$i])) { 
    $Voyelles = false;
    $Consonnes = false;

    for ($j = 0; $j < 10; $j++) { 
        if ($str[$i] == $voyelle[$j]) {
            $Voyelles = true;
            break;
        }
    }

    
    for ($j = 0; $j < 42; $j++) { 
        if ($str[$i] == $consonne[$j]) {
            $Consonnes = true;
            break;
        }
    }

    if ($Voyelles) {
        $dic["voyelle"]++;
    } elseif ($Consonnes) {
        $dic["consonne"]++;
    }

    $i++; 
}

echo "<table border='3'>
            <tr>
                <td>Voyelle</td>
                <td>Consonne</td>
            </tr>
            <tr>
                <td>{$dic['voyelle']}</td>
                <td>{$dic['consonne']}</td>
            </tr>
      </table>";

?>