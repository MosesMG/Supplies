<?php
session_start();
require 'admin/database.php';

if ($_POST['submit']) {

    $email = htmlspecialchars($_POST['email']);
    $passwd = htmlspecialchars($_POST['passwd']);

    $user = $dbase->query('SELECT * FROM client WHERE emailclt = "'.$email.'"');
    $theUser = $user->fetch();

    $adMails = [];
    $mails = $dbase->prepare('SELECT emailclt FROM client');
    $mails->execute($adMails);

    while ($theMails = $mails->fetch()){
       $adMails[] = $theMails[0];
    }
    // var_dump($adMails);
    
    if (!in_array($email, $adMails)) {
        echo '<script>
                alert("Vous n\'êtes pas inscrit !")
                window.location.replace("connexion.php")
            </script>';
    }
    elseif ($theUser['motpas'] == $passwd) {
        echo '<script>
                alert("Bienvenue '.$theUser['nomclt'].' '.$theUser['prenomclt'].'")
                window.location.replace("shop.php")
            </script>';
        $_SESSION['id'] = $theUser['idclt'];
        $_SESSION['nom'] = $theUser['nomclt'];
        $_SESSION['prenom'] = $theUser['prenomclt'];
        $_SESSION['email'] = $theUser['emailclt'];
    }
    else {
        echo '<script>
                alert("Mot de passe incorrect !")
                window.location.replace("connexion.php")
            </script>';
    }
}
else {
    header("Location: connexion.php");
    exit;
}

?>
