<?php 
    require 'database.php' ;

    $delete = $dbase->query('DELETE FROM article WHERE idart = "'.$_GET['id'].'"');

    if($delete) {
        echo '<script>alert("Article supprimé avec succès !")
            window.location.replace("manager.php")</script>';
    }
?>
