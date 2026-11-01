
<?php
$etudiants = [
    ["nom" => "Ben Ali", "prenom" => "Ahmed", "age" => 20, "moyenne" => 15.5],
    ["nom" => "Trabelsi", "prenom" => "Sarra", "age" => 21, "moyenne" => 14],
    ["nom" => "Mansouri", "prenom" => "Youssef", "age" => 19, "moyenne" => 16.5],
    ["nom" => "Haddad", "prenom" => "Amira", "age" => 22, "moyenne" => 13]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des étudiants</title>
</head>
<body>

<h2>Liste des étudiants</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Âge</th>
        <th>Moyenne</th>
    </tr>

    <?php foreach ($etudiants as $etudiant) { ?>
        <tr>
            <td><?= $etudiant["nom"] ?></td>
            <td><?= $etudiant["prenom"] ?></td>
            <td><?= $etudiant["age"] ?></td>
            <td><?= $etudiant["moyenne"] ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>
