<?php
session_start();

$home = '../index.php';
if (!isset($_SESSION['id'])) {
    header('Location: '.$home);
    exit;
}

require 'database.php';

$nomart = $_POST['nomart'];
$image = htmlspecialchars($_POST['image']);
$prixart = htmlspecialchars($_POST['prixart']);
$quantite = htmlspecialchars($_POST['quantite']);
$montant = htmlspecialchars($_POST['prixtotal']);

$numfact = strtoupper(substr($nomart, 0, 4)).''.substr($prixart, 0, 3);

$date = date('Y-m-d H:i:s');

$idclt = $_SESSION['id'];

$article = $dbase->query('SELECT idart FROM article WHERE nomart = "'.$nomart.'"');
$idart = $article->fetch();

$libcateg = $dbase->query('SELECT libcateg FROM categorie, article
                            WHERE categorie.idcateg = article.idcateg
                            AND nomart = "'.$nomart.'"');
$categ = $libcateg->fetch();

// $shop = '../shop.php';

if ($_POST['submit']) {
    if(isset($image) && isset($nomart) && isset($prixart) && isset($quantite) && isset($montant)) {
        // Insertion dans la table facture
        $commade = $dbase->prepare('INSERT INTO facture(numfact, datehr, qte, montant, idart, idclt) 
                                    VALUES (:numfact, :datehr, :qte, :montant, :idart, :idclt)');
        $commade->execute([
            'numfact' => $numfact,
            'datehr' => $date,
            'qte' => $quantite,
            'montant' => $montant,
            'idart' => $idart['idart'],
            'idclt' => $idclt
        ]); 
        // echo 'Insertion réussie';
        include 'facture.php';
    }
    else {
        echo 'ERREUR !';
    }
}

