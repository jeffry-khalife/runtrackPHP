<?php
$jour = true;
function Bonjour($jour) {
    if ($jour == true) {
        return "Bonjour";
    }
    else {
        return "Bonsoir";
    }
}
echo Bonjour($jour);

?>
</body>
</html>
