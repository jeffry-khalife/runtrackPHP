<?php 
$str = "Dans l'espace, personne ne vous entend crier.";
$nbrecaractere = 0;
for ($i = 0; isset($str[$i]);$i++) {
    $nbrecaractere++;
}
echo "le nombre de caractere dans la phrase est ", $nbrecaractere;

?>

