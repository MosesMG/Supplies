<?php

try {
    $bde = new PDO('mysql:host=localhost;dbname=thesupplies', 'root', '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}


$req = $bde->prepare('INSERT INTO vendeur(nom, prenom, email, mot2pass) VALUES (?, ?, ?, ?)');
$req->execute([$_POST['userid'], $_POST['prenom'], $_POST['email'], $_POST['pass']]);

echo "<h2>Enregistrement effectué!</h2>";