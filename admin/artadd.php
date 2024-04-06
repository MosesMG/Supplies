<?php require 'database.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link rel="icon" href="../images/icon-plus.png">
    <link rel="stylesheet" href="../style/manager.css">
</head>
<body>

    <?php
        $categories = $dbase->query('SELECT idcateg, libcateg FROM categorie');
        $categ = $categories->fetchAll();
        

        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $prix = htmlspecialchars($_POST['prix']);
            $image = $_FILES['image']['name'];
            $idcateg = htmlspecialchars($_POST['categ']);

            if (isset($nom) && isset($prix) && isset($image)) {
                if (in_array((pathinfo($image)['extension']), ['jpg', 'jpeg', 'png', 'gif'])){
                    $ajouter = $dbase->prepare('INSERT INTO article VALUES (null, :nomart, :prixart, :imgart, :idcateg)');
                    $ajouter->execute([
                        'nomart' => $nom,
                        'prixart' => $prix,
                        'imgart' => $image,
                        'idcateg' =>$idcateg
                    ]);

                    if ($ajouter) {
                        echo '<script>alert("Article ajouté avec succès !")
                                window.location.replace("manager")</script>';
                    }
                    else {
                        $erreur = '<script>alert("Article NON ajouté !")</script>';
                    }
                }    
            }
            else {
                $erreur = '<script>alert("Veuillez remplir tous les champs !")</script>';
            }
        }
    ?>

    <h2>Ajout d'un nouvel article</h2>

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

        <form action="artadd.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="" required>
            </div>
            <div>
                <label for="prix">Prix (en €) :</label>
                <input type="number" name="prix" id="" required>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="file" name="image" id="" required>
            </div>
            <div>
                <label for="categ">Catégorie :</label>
                <select name="categ" id="">
                    <option value="<?= $categ[0][0] ?>">
                        <?= $categ[0][1] ?>
                    </option>
                    <option value="<?= $categ[1][0] ?>">
                        <?= $categ[1][1] ?>
                    </option>
                    <option value="<?= $categ[2][0] ?>">
                        <?= $categ[2][1] ?>
                    </option>
                </select>
            </div>
            <div class="boutons">
                <input type="submit" value="Ajouter" name="submit">
                <input type="reset" value="Annuler">
            </div>
        </form>

    </div>
    
</body>
</html>