<?php
$str = "Bonjour Bonsoir";
function convert($str) {
    $leet = [
        "a" => "4", "A" => "4",
        "e" => "3", "E" => "3",
        "l" => "1", "L" => "1",
        "t" => "7", "T" => "7",
        "o" => "0", "O" => "0",
        "s" => "$", "S" => "$",
        "b" => "8", "B" => "8",
        "g" => "9", "G" => "9"
    ];

    $resultat = " "; 

    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];
        
        if (isset($leet[$char])) {
            $resultat .= $leet[$char];
        } 
        else {
            $resultat .= $char;
        }
    }

    return $resultat; 
}


echo convert($str); 

?>