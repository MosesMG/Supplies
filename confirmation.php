<?php
    session_start();

    if (!isset($_SESSION['id'])){
        echo '<script>
                alert("Vous devez vous connecter pour effectuer un achat !")
                window.location.replace("connexion.php")
            </script>';
    } else {
        $name = $_SESSION['nom'];
    }

    $nomart = $_POST['nomart'];
    $prixart = $_POST['prixart'];
    $imgart = $_POST['imgart'];

    if (str_starts_with($imgart, "voit")) {
        $path = 'images/voitures/'.$imgart;
    }
    elseif (str_starts_with($imgart, "mod")) {
        $path = 'images/mode/'.$imgart;
    }
    else {
        $path = 'images/electro/'.$imgart;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de l'achat</title>
    <link rel="icon" href="images/icon-buying.png">
    <link rel="stylesheet" href="style/confirm.css">
    <script src="scripts/confirm.js" defer></script>
</head>
<body>
    <div class="text">Article choisi de <?= $name ?></div>
    <form class="container" method="post" action="admin/insertion.php">
        <div class="box">
            <div>
                <img src="<?= $path ?>" alt="">
                <input type="hidden" name="image" id="" value="<?= $path ?>">
            </div>
            <div class="price">
                <p><?= $nomart ?></p>
                <div class="nombre">
                    <img src="images/icon-moins.png" alt="" id="moins">
                    <span id="quantite"></span>
                    <img src="images/icon-plus.png" alt="" id="plus">
                </div>
                <p class="prix"><span id="lePrix"><?= $prixart ?></span>€</p>
                <span style="display: none;" id="prixUnit"><?= $prixart ?></span>
                <input type="hidden" name="nomart" id="" value="<?= $nomart ?>">
                <input type="hidden" name="prixart" id="" value="<?= $prixart ?>">
                <input type="hidden" name="quantite" id="inputQte">
                <input type="hidden" name="prixtotal" id="prixTotal">
            </div>
        </div>
        <hr>
        <div class="buttons">
            <input type="submit" name="submit" value="Acheter" id="okYes">
            <button type="button" id="okNo">Annuler</button>
        </div>
    </form>
    <span id="nom" style="display: none"><?= $_SESSION['prenom'] ?></span>
</body>
</html>