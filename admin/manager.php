<?php

require 'database.php';

$lesArticles = $dbase->query('SELECT * FROM article, categorie
                            WHERE categorie.idcateg = article.idcateg');


if(isset($_POST['userid']) && isset($_POST['pass'])){
    if(($_POST['userid'] !== 'admin') || ($_POST['pass'] !== 'admin')){
        echo '<script>alert("Identifiant et/ou mot de passe incorrect(s) !")
                window.location.replace("index.html")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page administration</title>
    <link rel="icon" href="../images/icon-administrateur-homme.png">
    <link rel="stylesheet" href="../style/manager.css">
</head>
<body>

    <h2>Liste de tous les articles en vente</h2>

    <div class="container">
        <div class="lesbtns">
            <a href="artadd.php" class="addbtn"><img src="../images/icon-plus.png">Ajouter</a>
            <a href="commandes.php" class="addbtn"><img src="../images/icon-liste-de-vérification.png" alt="">Commandes</a>
            <a href="../index.php" class="addbtn"><img src="../images/icon-accueil.png" alt="">Accueil</a>
        </div>
        
        <table>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Image</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                if(($lesArticles) == 0){
                    // S'il n'y a plus d'articles
                    echo "Il n'y a plus d'articles à vendre !" ;
                    
                } else {
                    // Affichage de la liste de tous les articles
                    
                    while($article = $lesArticles->fetch()){
                        if (str_starts_with($article['imgart'], "voit")) {
                            $image = '../images/voitures/'.$article['imgart'];
                        }
                        elseif (str_starts_with($article['imgart'], "mod")) {
                            $image = '../images/mode/'.$article['imgart'];
                        }
                        else {
                            $image = '../images/electro/'.$article['imgart'];
                        }
                ?>
            <tr>
                <td>
                    <?= $article['nomart'] ?>
                </td>
                <td>
                    <?= $article['prixart'] ?>€
                </td>
                <td>
                    <?= $article['libcateg'] ?>
                </td>
                <td>
                    <img src="<?= $image ?>" alt="">
                </td>
                <td class="petits">
                    <a href="artupdate.php?id=<?= $article['idart'] ?>"><img src="../images/pen.png"></a>
                </td>
                <td class="petits">
                    <a href="artdelete.php?id=<?= $article['idart'] ?>"><img src="../images/trash.png"></a>
                </td>
            </tr>
            <?php
                }      
                $lesArticles->closeCursor();
            }
            ?>
         
        </table>
   
    </div>
    
</body>
</html>