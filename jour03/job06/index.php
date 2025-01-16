<?php
/*
$str = "Les choses que l'on Possède finissent par nous posséder";
$inverse = " ";

for ($i = strlen($str) -1; $i > 0 ; $i-- ) {
    $inverse .= $str[$i];
}
echo $inverse;
*/

$str = "Les choses que l'on Possede finissent par nous posseder";
$inverse = " ";
$longeur= 0;
while(isset($str[$longeur])){
    $longeur++;
}
for ($i = $longeur -1; $i > 0 ; $i-- ) {
    $inverse .= $str[$i];
}
echo $inverse;



?>

