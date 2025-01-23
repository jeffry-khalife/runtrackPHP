<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT prenom,nom,naissance FROM etudiants WHERE naissance <= "2018-01-01" AND naissance >= "1998-01-01"';
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$etudiant = $sql->fetchAll();


?>

<table border='1'>
    <thead>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>naissance</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $etudiant[0]["nom"]; ?></td>
                <td><?php echo $etudiant[0]["prenom"]; ?></td>
                <td><?php echo $etudiant[0]["naissance"]; ?></td>

            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[1]["nom"]; ?></td>
                <td><?php echo $etudiant[1]["prenom"]; ?></td>
                <td><?php echo $etudiant[1]["naissance"]; ?></td>
            </tr>
    </tbody>
</table>
