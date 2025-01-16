<?php 
/*
$voyelles = "aeiouAEIOU";
$str = "I'm sorry Dave I'm afraid I can't do that.";
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
*/
$voyelles = "aeiouAEIOU";
$str = "I'm sorry Dave I'm afraid I can't do that.";
$i = 0;
while (isset($str[$i])) {
    $Voyelle = false;
    for ($j = 0; $j < 10; $j++) { 
        if ($str[$i] == $voyelles[$j]) {
            $Voyelle = true;
            break;
        }
    }
    if ($Voyelle) {
        echo $str[$i];
    }
    $i++;
}



?>

