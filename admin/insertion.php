<?php
session_start();

require 'database.php';

$image = htmlspecialchars($_POST['image']);
$nomart = htmlspecialchars($_POST['nomart']);
$prixart = htmlspecialchars($_POST['prixart']);

$quantite = htmlspecialchars($_POST['quantite']);
$montant = htmlspecialchars($_POST['prixtotal']);

$numfact = strtoupper(substr($nomart, 0, 4)).''.$prixart;

$date = date('Y-m-d H:i:s');

$idclt = $_SESSION['id'];

$article = $dbase->query('SELECT idart FROM article WHERE nomart = "'.$nomart.'"');
$idart = $article->fetch();

$shop = '../shop.php';

if ($_POST['submit']) {
    if(isset($image) && isset($nomart) && isset($prixart) && isset($quantite) && isset($montant)) {
        // Insertion dans la table facture
        $commade = $dbase->prepare('INSERT INTO facture(numfact, datehr, qte, montant, idart, idclt) VALUES (:numfact, :datehr, :qte, :montant, :idart, :idclt)');
        $commade->execute([
            'numfact' => $numfact,
            'datehr' => $date,
            'qte' => $quantite,
            'montant' => $montant,
            'idart' => $idart['idart'],
            'idclt' => $idclt
        ]); 
        // header("Location: $shop");
        echo 'Insertion réussie';
    }
    else {
        echo 'ERREUR !';
    }
}

