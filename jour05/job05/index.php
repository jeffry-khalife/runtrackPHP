<?php
$str = "Bonjour";
$char = "o";

function occurrences($str, $char) {
    $nbrechar = 0; 
    $i = 0;
    
    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $nbrechar++;
        }
        $i++; 
    }
    
    return $nbrechar; 
}
echo occurrences($str, $char); 

?>
</body>
</html>
