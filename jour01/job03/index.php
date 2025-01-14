<?php 
$bool = true;
$str = "Salut";
$valeur = 12;
$moyenne = 10.9;


$tableau = [
    "type"  => array(gettype($bool),gettype($str),gettype($valeur) ,gettype($moyenne)),
    "nom" => array("bool", "str", "valeur", "moyenne"),
    "valeur"   => array("$bool", "$str", "$valeur","$moyenne")
];



print_r ($tableau);
/*
print_r ($tableau["type"]);
print_r ($tableau["nom"]);
print_r ($tableau["valeur"]);
*/

?>