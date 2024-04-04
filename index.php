<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The SUPPLIES</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="images/icon.png">
    <script src="scripts/scrpit.js" defer></script>
</head>
<body>
    <header>
    
        <?php 
            $link = 'home';
            include 'navbar.php'
        ?>

        <section>
            <div class="descript">
                <h2>Meilleure collection d'articles</h2>
                <p>Nous sommes un établissement spécialisé dans la vente des meilleures articles dans le domaine et nous proposons un service après-vente.</p>
                <a href="shop.php">Accéder à la boutique</a>
            </div>
            <div class="lesImages"></div>
        </section>
    </header>
    
    <main>
        <div class="textCat" id="categorie">
            <h1>Nous disposons des produits dans plusieurs catégories à savoir</h1>
        </div>
        <div class="categories">
            <ul>
                <li>
                    <img src="images/car1.jpg" alt="">
                    <p>Véhicules</p>
                    <a href="shop.php">Explorer</a>
                </li>
                <li>
                    <img src="images/pr6.png" alt="">
                    <p>électronique</p>
                    <a href="shop.php">Explorer</a>
                </li>
                <li>
                    <img src="images/vet6.png" alt="">
                    <p>Mode & Beauté</p>
                    <a href="shop.php">Explorer</a>
                </li>
            </ul>
        </div>
    </main>

    <div id="about">
        <div class="apropos">
            <div class="propostxt">
                <h1>À propos</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestiae eos labore hic eum
                    asperiores fugit dolorem assumenda aliquam temporibus magnam similique autem odio laboriosam debitis, quisquam ducimussed optio.
                    Nam in, neque ea adipisci debitis assumenda minus maiores consequuntur sed iure officia amet mollitia
                    aut! Ipsum excepturi earum fuga, corrupti unde voluptatibus eligendi, sunt dolorum, minus officia
                    repudiandaecupiditate.
                </p>
            </div>
            <div>
                <img src="images/pr16.png" alt="">
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <img src="images/icon-haut.png" alt="" class="iconTop"
        onclick="window.scrollTo ({
            top: 0,
            left: 0,
            behavior: 'smooth'
        })"
    >

</body>
</html>
