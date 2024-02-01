<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de nous</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="style/propos.css">
    <script src="scripts/scrpit.js" defer></script>
</head>
<body>
    <header>
        
        <?php
            $link = 'propos';
            include 'navbar.php';
        ?>

        <div class="about">
            <h1>À propos de nous . . .</h1>
        </div>
    </header>
    <main>
        <div class="apropos">
            <div class="propostxt">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium molestiae eos labore hic eum
                    asperiores fugit dolorem assumenda aliquam temporibus magnam similique autem odio laboriosam debitis, quisquam
                    ducimussed optio.
                    Nam in, neque ea adipisci debitis assumenda minus maiores consequuntur sed iure officia amet
                    mollitia
                    aut! Ipsum excepturi earum fuga, corrupti unde voluptatibus eligendi, sunt dolorum, minus officia
                    repudiandaecupiditate.
                </p>
            </div>
            <div>
                <img src="images/pr16.png" alt="">
            </div>
        </div>

        <div class="contact">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3090843978207!2d1.1875690111344686!3d6.222914126556195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159883ef93505%3A0xd2f1987ca426403b!2zRVNBIEFnb8Oo!5e0!3m2!1sfr!2stg!4v1704320955243!5m2!1sfr!2stg" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            </div>

            <div class="line"></div>

            <div class="message">
                <p>Laisser un message</p>
                <form action="" method="get">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="">
                    </div>
                    <div>
                        <label for="mail">Email</label>
                        <input type="email" name="mail" id="">
                    </div>
                    <div>
                        <label for="texte">Votre message</label>
                        <textarea name="texte" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div>
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
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