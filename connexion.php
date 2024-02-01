<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="style/connect.css">
    <link rel="icon" href="images/iconf2.png">
    <script src="scripts/scrpit.js" defer></script>
    <script src="scripts/connect.js" defer></script>
</head>

<body>

    <header>

        <?php
        $link = 'connexion';
        include 'navbar.php'
        ?>

        <section class="texTop">
            <h2 class="topOpen">Connectez-vous ici !</h2>
            <h2 class="topClose">Inscrivez-vous ici !</h2>
        </section>
    </header>

    <main>
        <div id="connexion">
            <form action="check_connect.php" method="POST">
                <div>
                    <label for="userid">Email</label>
                    <input type="email" name="userid" id="" required>
                </div>
                <div class="passWd">
                    <label for="pass">Mot de passe</label>
                    <input type="password" name="pass" id="passwordOne" required>
                    <img src="images/icon-visible.png" alt="" class="show" id="showOne">
                    <img src="images/icon-invisible.png" alt="" class="noshow" id="noshowOne">
                </div>
                <div>
                    <button type="submit">Se connecter</button>
                </div>
                <div class="notyet">
                    <p>Pas de compte ?</p>
                    <span id="versInscrip">S'inscrire</span>
                </div>
            </form>
        </div>

        <div id="inscription" style="display: none">
            <form action="check_inscrip.php" method="POST">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="userid" id="" required>
                </div>
                <div>
                    <label for="prenom">Prénom(s)</label>
                    <input type="text" name="prenom" id="" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="" required>
                </div>
                <div class="passWd">
                    <label for="pass">Mot de passe</label>
                    <input type="password" name="pass" id="passTwo" required>
                    <img src="images/icon-visible.png" alt="" class="show" id="showTwo">
                    <img src="images/icon-invisible.png" alt="" class="noshow" id="noshowTwo">
                </div>
                <div class="passWd">
                    <label for="pass">Confirmer le mot de passe</label>
                    <input type="password" name="password" id="passThree" required>
                    <img src="images/icon-visible.png" alt="" class="show" id="showThree">
                    <img src="images/icon-invisible.png" alt="" class="noshow" id="noshowThree">
                </div>
                <div>
                    <button type="submit">S'enregistrer</button>
                </div>
                <div class="notyet">
                    <p>Déjà inscrit ?</p>
                    <span id="versConnect">Se connecter</span>
                </div>
            </form>
        </div>

    </main>

</body>

</html>