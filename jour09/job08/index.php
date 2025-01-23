<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



$requete = 'SELECT SUM(capacite) AS total FROM salle ';
$sql = $db->prepare($requete);
$sql->execute();
$capacite_totale = $sql->fetch(PDO::FETCH_ASSOC);
$sum = $capacite_totale['total'];

?>

<table border='1'>
    <thead>
            <tr>
                <td>Capacité totale</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $capacite_totale['total']; ?></td>
            </tr>
    </tbody>
</table>
