<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT SUM(superficie) AS total FROM etage ';
$sql = $db->prepare($requete);
$sql->execute();
$superficie_totale = $sql->fetch(PDO::FETCH_ASSOC);
$sum = $superficie_totale['total'];
?>

<table border='1'>
    <thead>
            <tr>
                <td>Superficie totale</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $superficie_totale["total"]; ?></td>
            </tr>
    </tbody>
</table>
