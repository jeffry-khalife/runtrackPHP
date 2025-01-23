<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=jour08", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = 'SELECT * FROM etudiants';
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
    <tbody>
            <tr>
                <td><?php echo $etudiant[2]["nom"]; ?></td>
                <td><?php echo $etudiant[2]["prenom"]; ?></td>
                <td><?php echo $etudiant[2]["naissance"]; ?></td>
                <td><?php echo $etudiant[2]["sexe"]; ?></td>
                <td><?php echo $etudiant[2]["email"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[3]["nom"]; ?></td>
                <td><?php echo $etudiant[3]["prenom"]; ?></td>
                <td><?php echo $etudiant[3]["naissance"]; ?></td>
                <td><?php echo $etudiant[3]["sexe"]; ?></td>
                <td><?php echo $etudiant[3]["email"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[4]["nom"]; ?></td>
                <td><?php echo $etudiant[4]["prenom"]; ?></td>
                <td><?php echo $etudiant[4]["naissance"]; ?></td>
                <td><?php echo $etudiant[4]["sexe"]; ?></td>
                <td><?php echo $etudiant[4]["email"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[5]["nom"]; ?></td>
                <td><?php echo $etudiant[5]["prenom"]; ?></td>
                <td><?php echo $etudiant[5]["naissance"]; ?></td>
                <td><?php echo $etudiant[5]["sexe"]; ?></td>
                <td><?php echo $etudiant[5]["email"]; ?></td>
            </tr>
    </tbody>
    <tbody>
            <tr>
                <td><?php echo $etudiant[6]["nom"]; ?></td>
                <td><?php echo $etudiant[6]["prenom"]; ?></td>
                <td><?php echo $etudiant[6]["naissance"]; ?></td>
                <td><?php echo $etudiant[6]["sexe"]; ?></td>
                <td><?php echo $etudiant[6]["email"]; ?></td>
            </tr>
    </tbody>
</table>
