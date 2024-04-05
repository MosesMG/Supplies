<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture de l'achat</title>
    <link rel="stylesheet" href="../style/facture.css">
    <link rel="icon" href="../images/icon-papier.png">
</head>
<body>

    <h2>Visualisation de la facture</h2>

    <div class="container">
        <div class="boxfact">
            <p>
                FACTURE N° :
                <span><?= $numfact ?></span>
            </p>
            <p>
                Date :
                <span><?= date_format(date_create($date), 'd/m/Y') ?></span>
            </p>
            <p>
                Heure :
                <span><?= date_format(date_create($date), 'H:i') ?></span>
            </p>
        </div>

        <div class="boxclt">
            <p>Informations du client</p>
            <div class="imgart">
                <div class="infosclt">
                    <div>
                        Nom :
                        <span><?= $_SESSION['nom'] ?></span>
                    </div>
                    <div>
                        Prénom(s) :
                        <span><?= $_SESSION['prenom'] ?></span>
                    </div>
                    <div>
                        Email :
                        <span><?= $_SESSION['email'] ?></span>
                    </div>
                </div>
                <div class="image">
                    <img src="../<?= $image ?>" alt="">
                </div>
            </div>
        </div>

        <div class="boxart">
            <p>Article acheté</p>
            <table>
                <tr>
                    <th>Catégorie</th>
                    <th>Nom</th>
                    <th>P.U</th>
                    <th>Qte</th>
                    <th>P Total</th>
                </tr>
                <tr>
                    <td><?= $categ['libcateg'] ?></td>
                    <td><?= $nomart ?></td>
                    <td><?= $prixart ?>€</td>
                    <td><?= $quantite ?></td>
                    <td><?= $montant ?>€</td>
                </tr>
            </table>
        </div>

        <div class="total">
            <p>Total à payer :</p>
            <p><?= $montant ?>€</p>
        </div>

        <div class="thank">
            <hr>
            <span>Merci !</span>
            <hr>
        </div>
    </div>

    <div class="home">
        <a href="../index.php">Retour à l'accueil</a>
    </div>

</body>
</html>