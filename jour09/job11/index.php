<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



$requete = 'SELECT AVG(capacite) AS total FROM salle';
$sql = $db->prepare($requete);
$sql->execute();
$avgcapacite = $sql->fetch(PDO::FETCH_ASSOC);
$sum = $avgcapacite['total'];


?>

<table border='1'>
    <thead>
            <tr>
                <td>Capacité des salles</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $avgcapacite["total"]; ?></td>
            </tr>
    </tbody>
</table>
