<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commandes</title>
    <link rel="icon" href="../images/icon-liste-de-vérification.png">
    <link rel="stylesheet" href="../style/manager.css">
    <style>
        .lesbtns {
            margin-top: 0;
        }
        table {
            background: #ffffffaa;
            color: #000;
            backdrop-filter: blur(15px) !important;
        }
        th {
            padding: 15px 5px !important;
            font-size: 22px !important;
        }
        td {
            padding: 10px 5px !important;
        }
    </style>
</head>
<body>

    <?php
        require 'database.php';

        $lescommandes = $dbase->query('SELECT numfact, datehr, qte, montant, nomart, libcateg, nomclt, prenomclt, emailclt
                                        FROM facture, article, categorie, client
                                        WHERE facture.idart = article.idart
                                        AND facture.idclt = client.idclt
                                        AND article.idcateg = categorie.idcateg');
    ?>

    <h2>Liste des commandes</h2>

    <div class="lesbtns">
        <a href="manager.php" class="addbtn"><img src="../images/back.png" alt="">Retour</a>
    </div>

    <table>
        <tr>
            <th>N°</th>
            <th>Article</th>
            <th>Catégorie</th>
            <th>Qte</th>
            <th>Montant</th>
            <th>Date - Heure</th>
            <th colspan="3">Client</th>
        </tr>

        <?php while ($commande = $lescommandes->fetch()) {
            $datehr = new DateTime($commande['datehr']);
        ?>
        
        <tr>
            <td><?= $commande['numfact'] ?></td>
            <td><?= $commande['nomart'] ?></td>
            <td><?= $commande['libcateg'] ?></td>
            <td><?= $commande['qte'] ?></td>
            <td><?= $commande['montant'] ?>€</td>
            <td><?= $datehr->format('d/m/Y H:i') ?></td>
            <td><?= $commande['nomclt'] ?></td>
            <td><?= $commande['prenomclt'] ?></td>
            <td><?= $commande['emailclt'] ?></td>
        </tr>

        <?php } $lescommandes->closeCursor(); ?>

    </table>
    
</body>
</html>