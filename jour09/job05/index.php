<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT * FROM etudiants WHERE naissance >= "2007-01-01"';
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
                <td>sexe</td>
                <td>email</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $etudiant[0]["nom"]; ?></td>
                <td><?php echo $etudiant[0]["prenom"]; ?></td>
                <td><?php echo $etudiant[0]["naissance"]; ?></td>
                <td><?php echo $etudiant[0]["sexe"]; ?></td>
                <td><?php echo $etudiant[0]["email"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[1]["nom"]; ?></td>
                <td><?php echo $etudiant[1]["prenom"]; ?></td>
                <td><?php echo $etudiant[1]["naissance"]; ?></td>
                <td><?php echo $etudiant[1]["sexe"]; ?></td>
                <td><?php echo $etudiant[1]["email"]; ?></td>
            </tr>
    </tbody>
</table>
