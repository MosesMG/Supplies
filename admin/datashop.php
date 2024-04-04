<?php
require 'database.php';

$categories = $dbase->query('SELECT libcateg FROM categorie');

$voitures = $dbase->query('SELECT nomart, prixart, imgart FROM article WHERE idcateg = 1');

$bijoux = $dbase->query('SELECT nomart, prixart, imgart FROM article WHERE idcateg = 2');

$electro = $dbase->query('SELECT nomart, prixart, imgart FROM article WHERE idcateg = 3');
