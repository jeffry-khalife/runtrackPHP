<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT nom,capacite FROM salle';
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$salle = $sql->fetchAll();


?>

<table border='1'>
    <thead>
            <tr>
                <td>Nom</td>
                <td>Capacité</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $salle[0]["nom"]; ?></td>
                <td><?php echo $salle[0]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $salle[1]["nom"]; ?></td>
                <td><?php echo $salle[1]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $salle[2]["nom"]; ?></td>
                <td><?php echo $salle[2]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $salle[3]["nom"]; ?></td>
                <td><?php echo $salle[3]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $salle[4]["nom"]; ?></td>
                <td><?php echo $salle[4]["capacite"]; ?></td>
            </tr>
    </tbody>
</table>
