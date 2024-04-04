<?php

try 
{
    $dbase = new PDO("mysql:host=localhost;dbname=suppliesdb", "root", "");
    $dbase -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'REUSSIE';
}
catch (PDOException $e) {
    die('Erreur : '.$e->getMessage());
}
