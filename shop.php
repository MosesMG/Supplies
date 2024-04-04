<?php session_start();
    if (isset($_SESSION['id'])){
        $lenom = $_SESSION['prenom'];
    } else {
        $lenom = null;
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique des SUUPLIES</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="style/shop_style.css">
    <script src="scripts/scrpit.js" defer></script>
</head>

<body>
    <header>

        <?php
            $link = 'shop';
            include 'admin/datashop.php';
            include 'navbar.php';
        ?>

        <section class="descTop">
            <h2 class="hTwo">Bienvenue sur notre boutique <?= $lenom ?> !</h2>
            <p>Ici vous verrez tous nos produits classés dans leurs différentes catégories</p>
        </section>
    </header>

    <main>
        <?php $category = $categories->fetchAll() ?>
        <ul class="shopTop">
            <li id="lienVehicules">
                <?= $category[0][0] ?>
            </li>
            <li id="lienMode">
                <?= $category[1][0] ?>
            </li>
            <li id="lienElectro">
                <?= $category[2][0] ?>
            </li>
        </ul>

        <div class="container">

            <section id="lesVoitures">
                <div class="enonce">
                    <p>Catégorie Véhicules</p>
                </div>
                <div class="catVoiture">

                    <?php while ($caisse = $voitures->fetch()) { ?>

                    <form class="uneVoiture" action="confirmation.php" method="post">
                        <div class="laCaisse">
                            <img src="images/voitures/<?= $caisse['imgart'] ?>" alt="">
                            <input type="text" name="imgart" id="" value="<?= $caisse['imgart'] ?>">
                        </div>
                        <div class="second">
                            <div>
                                <h2><?= $caisse['nomart'] ?></h2>
                                <input type="text" name="nomart" id="" value="<?= $caisse['nomart'] ?>">
                            </div>
                            <div class="leprix">
                                <span><?= $caisse['prixart'] ?></span>€
                                <input type="text" name="prixart" id="" value="<?= $caisse['prixart'] ?>">
                            </div>
                            <div>
                                <input type="submit" value="Achter" class="acheter">
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </form>

                    <?php }  $voitures->closeCursor(); ?>
                </div>
            </section>

            <section id="laMode" style="display: none;">
                <div class="enonce">
                    <p>Catégorie Mode</p>
                </div>
                <div class="catMode">

                    <?php while ($mode = $bijoux->fetch()) { ?>

                    <form class="uneMode" action="confirmation.php" method="post">
                        <div class="imgMode">
                            <img src="images/mode/<?= $mode['imgart']?>" alt="">
                            <input type="text" name="imgart" id="" value="<?= $mode['imgart'] ?>">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2><?= $mode['nomart'] ?></h2>
                                <input type="text" name="nomart" id="" value="<?= $mode['nomart'] ?>">
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span><?= $mode['prixart'] ?></span>€
                                <input type="text" name="prixart" id="" value="<?= $mode['prixart'] ?>">
                            </div>
                            <div>
                                <input type="submit" value="Achter" class="acheter">
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </form>

                    <?php } $bijoux->closeCursor(); ?>

                </div>
            </section>

            <section id="lesElectro" style="display: none;">
                <div class="enonce">
                    <p>Catégorie Électronique</p>
                </div>
                <div class="catElectro">

                    <?php while ($tech = $electro->fetch()) { ?>

                    <form class="unElectro" action="confirmation.php" method="post">
                        <div class="imgElectro">
                            <img src="images/electro/<?= $tech['imgart'] ?>" alt="">
                            <input type="text" name="imgart" id="" value="<?= $tech['imgart'] ?>">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2><?= $tech['nomart'] ?></h2>
                                <input type="text" name="nomart" id="" value="<?= $tech['nomart'] ?>">
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span><?= $tech['prixart'] ?></span>€
                                <input type="text" name="prixart" id="" value="<?= $tech['prixart'] ?>">
                            </div>
                            <div>
                                <input type="submit" value="Achter" class="acheter">
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </form>

                    <?php } $electro->closeCursor(); ?>

                </div>
            </section>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <img src="images/icon-haut.png" alt="" class="iconTop" onclick="window.scrollTo ({
            top: 0,
            left: 0,
            behavior: 'smooth'
        })">
</body>

</html>