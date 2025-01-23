<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT COUNT(*) AS total FROM etudiants ';
$sql = $db->prepare($requete);
$sql->execute();
$nb_etudiants = $sql->fetch(PDO::FETCH_ASSOC);
$sum = $nb_etudiants['total'];


?>

<table border='1'>
    <thead>
            <tr>
                <td>Nombre d'étudiants</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $nb_etudiants['total']; ?></td>
            </tr>
    </tbody>
</table>
