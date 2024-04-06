<?php
    require 'database.php';

    $idart = $_GET['id'];
    
    // if (!isset($_GET['id'])) {
    //     echo '<script>alert("Article non trouvé !")</script>';
    //     header("Location: manager.php");
    // }

    $articles = $dbase->query('SELECT * FROM article WHERE idart = "'.$idart.'"');
    $article = $articles->fetch(PDO::FETCH_ASSOC);
    // var_dump($idart);
    // var_dump($article);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
    <link rel="stylesheet" href="../style/manager.css">
    <link rel="icon" href="../images/pen.png">
</head>
<body>

    <?php 

        $categories = $dbase->query('SELECT idcateg, libcateg FROM categorie');
        $categ = $categories->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($categ);

        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $prix = htmlspecialchars($_POST['prix']);
            $image = $_FILES['image']['name'];
            $idcateg = htmlspecialchars($_POST['categ']);

            if (isset($nom) && isset($prix) && isset($image)) {
                if (in_array((pathinfo($image)['extension']), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $modifier = $dbase->prepare('UPDATE article SET nomart = :nomart, prixart = :prixart, imgart = :imgart, idcateg = :idcateg
                                                    WHERE idart = :idart');
                    $modifier->execute([
                        'nomart' => $nom,
                        'prixart' => $prix,
                        'imgart' => $image,
                        'idcateg' => $idcateg,
                        'idart' => $idart
                    ]);
                    if ($modifier) {
                        echo '<script>alert("Article modifié avec succès !")
                                window.location.replace("manager.php")</script>';
                    }
                    else {
                        $erreur = '<script>alert("Article NON modifié !")</script>';
                    }
                }
                else {
                    $erreur = '<script>alert("Veuillez remplir tous les champs !")</script>';
                }
            }
        }
    ?>

    <h2>Modification de l'article <?= $article['nomart'] ?></h2>

    <div class="formul">

        <div class="lesbtns">
            <a href="manager.php" class="addbtn"><img src="../images/back.png" alt="">Retour</a>
            <p>
                <?php 
                    if (isset($erreur)) {
                        echo $erreur;
                    }
                ?>
            </p>
        </div>

        <form action="artupdate.php?id=<?= $idart ?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="" value="<?= $article['nomart'] ?>" required>
            </div>
            <div>
                <label for="prix">Prix (en €) :</label>
                <input type="number" name="prix" id="" value="<?= $article['prixart'] ?>" required>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="file" name="image" id="" value="<?= $article['imgart'] ?>" required>
            </div>
            <div>
                <label for="categ">Catégorie :</label>
                <select name="categ" id="">
                    <option value="<?= $categ[0]['idcateg'] ?>">
                        <?= $categ[0]['libcateg'] ?>
                    </option>
                    <option value="<?= $categ[1]['idcateg'] ?>">
                        <?= $categ[1]['libcateg'] ?>
                    </option>
                    <option value="<?= $categ[2]['idcateg'] ?>">
                        <?= $categ[2]['libcateg'] ?>
                    </option>
                </select>
            </div>
            <div class="boutons">
                <input type="submit" value="Modifier" name="submit">
                <input type="hidden" value="Annuler">
            </div>
        </form>

    </div>
    
</body>
</html>