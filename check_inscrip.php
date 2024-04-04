<?php

require 'admin/database.php';

if ($_POST['submit']) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motpas = htmlspecialchars($_POST['pass']);

    if (isset($nom) && isset($prenom) && isset($email) && isset($motpas)) {
        $inserClt = $dbase->prepare('INSERT INTO client(nomclt, prenomclt, emailclt, motpas) VALUES (:nom, :prenom, :email, :pass)');
        $inserClt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'pass' => $motpas
        ]);

        echo '<script>
                alert("Inscription effectuée avec succès !")
                window.location.replace("connexion.php")
            </script>';
    }
    else {
        echo '<script>
                alert("Inscription echouée !")
                window.location.replace("connexion.php")
            </script>';
    }
}
else {
    header("Location: connexion.php");
    exit;
}
