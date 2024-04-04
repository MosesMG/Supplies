<?php

require 'database.php';

$lesClient = $dbase->query('SELECT * FROM client');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page administration</title>
    <link rel="icon" href="../images/icon-administrateur-homme.png">
    <!-- <link rel="stylesheet" href="../style/infos.css"> -->
</head>
<body>

    <div>
        <h2>Liste des commandes</h2>
    </div>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom(s)</th>
            <th>Email</th>
            <th>Commande</th>
        </tr>
    <?php while($client = $lesClient->fetch()) { ?>
        <tr>
            <td><?= $client['nomclt'] ?></td>
            <td><?= $client['prenomclt'] ?></td>
            <td><?= $client['emailclt'] ?></td>
            <td></td>
        </tr>
    <?php } ?>
    </table>

    <?php $lesClient->closeCursor(); ?>

</body>
</html>