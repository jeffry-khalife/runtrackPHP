<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT * FROM salle ORDER BY capacite ASC';
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$etudiant = $sql->fetchAll();


?>

<table border='1'>
    <thead>
            <tr>
                <td>id</td>
                <td>nom</td>
                <td>id_etage</td>
                <td>capacité</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $etudiant[0]["id"]; ?></td>
                <td><?php echo $etudiant[0]["nom"]; ?></td>
                <td><?php echo $etudiant[0]["id_etage"]; ?></td>
                <td><?php echo $etudiant[0]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[1]["id"]; ?></td>
                <td><?php echo $etudiant[1]["nom"]; ?></td>
                <td><?php echo $etudiant[1]["id_etage"]; ?></td>
                <td><?php echo $etudiant[1]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[2]["id"]; ?></td>
                <td><?php echo $etudiant[2]["nom"]; ?></td>
                <td><?php echo $etudiant[2]["id_etage"]; ?></td>
                <td><?php echo $etudiant[2]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[3]["id"]; ?></td>
                <td><?php echo $etudiant[3]["nom"]; ?></td>
                <td><?php echo $etudiant[3]["id_etage"]; ?></td>
                <td><?php echo $etudiant[3]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[4]["id"]; ?></td>
                <td><?php echo $etudiant[4]["nom"]; ?></td>
                <td><?php echo $etudiant[4]["id_etage"]; ?></td>
                <td><?php echo $etudiant[4]["capacite"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[5]["id"]; ?></td>
                <td><?php echo $etudiant[5]["nom"]; ?></td>
                <td><?php echo $etudiant[5]["id_etage"]; ?></td>
                <td><?php echo $etudiant[5]["capacite"]; ?></td>
            </tr>
    </tbody>
</table>
