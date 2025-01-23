<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT prenom,nom,naissance FROM etudiants WHERE sexe = "Femme"';
$sql = $db->prepare($requete);
$sql->setFetchMode(PDO::FETCH_ASSOC);
$sql->execute();
$etudiant = $sql->fetchAll();


?>

<table border='1'>
    <thead>
            <tr>
                <td>Prenom</td>
                <td>Nom</td>
                <td>Date de Naissance</td>
            </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $etudiant[0]["prenom"]; ?></td>
                <td><?php echo $etudiant[0]["nom"]; ?></td>
                <td><?php echo $etudiant[0]["naissance"]; ?></td>
            </tr>
    </tbody>
</table>
