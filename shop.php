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
            include 'navbar.php';
        ?>

        <section class="descTop">
            <h2 class="hTwo">Bienvenue sur notre boutique !</h2>
            <p>Ici vous verrez touts nos produits classées dans leurs différentes catégories</p>
        </section>
    </header>

    <main>

        <ul class="shopTop">
            <li id="lienVehicules">Véhicules</li>
            <li id="lienMode">Mode</li>
            <li id="lienElectro">électronique</li>
        </ul>

        <div class="container">

            <section id="lesVoitures">
                <div class="enonce">
                    <p>Catégorie Véhicules</p>
                </div>
                <div class="catVoiture">
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_1.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_2.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_3.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_4.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_5.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_6.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_7.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_8.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_9.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_10.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_11.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                    <div class="uneVoiture">
                        <div class="laCaisse">
                            <img src="images/voitures/voit_12.jpg" alt="">
                        </div>
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="images/moins.svg" alt="" class="moins">
                                <span class="chiffre"></span>
                                <img src="images/plus.svg" alt="" class="plus">
                            </div>
                            <div class="leprix">
                                <span>8500</span>€
                            </div>
                            <div>
                                <a href="hola.php">Acheter</a>
                            </div>
                            <p class="fermer">Cliquez dans cet espace pour fermer</p>
                        </div>
                    </div>
                </div>
            </section>


            <section id="laMode" style="display: none;">
                <div class="enonce">
                    <p>Catégorie Mode</p>
                </div>
                <div class="catMode">
                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod1.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod2.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod3.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod4.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod5.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod6.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod7.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod8.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod9.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod10.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod11.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="uneMode">
                        <div class="imgMode">
                            <img src="images/mode/mod12.png" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>250</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="lesElectro" style="display: none;">
                <div class="enonce">
                    <p>Catégorie Électronique</p>
                </div>
                <div class="catElectro">
                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_1.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_2.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_3.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_4.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_5.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_6.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_7.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_8.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_9.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_10.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_11.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

                    <div class="unElectro">
                        <div class="imgElectro">
                            <img src="images/electro/electro_12.jpg" alt="">
                        </div>
                        <hr class="line">
                        <div class="second">
                            <div>
                                <h2>Le nom</h2>
                            </div>
                            <div class="lesbuttons">
                                <img src="" alt="">
                                <span></span>
                                <img src="" alt="">
                            </div>
                            <div class="leprix">
                                <span>1500</span>€
                            </div>
                            <div>
                                <a href="">Acheter</a>
                            </div>
                            <p class="fermer">Cliquer dans l'espace pour fermer</p>
                        </div>
                    </div>

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