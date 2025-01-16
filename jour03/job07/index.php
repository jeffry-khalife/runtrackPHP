<?php 
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$inversement = " ";
$longeur= 0;
while(isset($str[$longeur])){
    $longeur++;
}
for ($i = 0; $i < $longeur; $i++) {
    if ($i == $longeur - 1) {
        $inversement .= $str[0];
    } 
    else {
        $inversement .= $str[$i +1] ;
    }
}

echo $inversement;

?>