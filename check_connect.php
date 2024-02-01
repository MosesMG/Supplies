<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=thesupplies', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

