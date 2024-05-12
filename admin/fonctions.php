<?php

function renameCaisse($category): string {
    $fichierCaisse = fopen('caisse.txt', 'r+');
    $rangCaisse = fgets($fichierCaisse);
    $rangCaisse++;
    fseek($fichierCaisse, 0);
    fputs($fichierCaisse, $rangCaisse);

    return $category.'_'.$rangCaisse;
}

function renameMode($category): string {
    $fichierMode = fopen('mode.txt', 'r+');
    $rangMode = fgets($fichierMode);
    $rangMode++;
    fseek($fichierMode, 0);
    fputs($fichierMode, $rangMode);

    return $category.''.$rangMode;
}

function renameElectro($category): string {
    $fichierElectro = fopen('electro.txt', 'r+');
    $rangElectro = fgets($fichierElectro);
    $rangElectro++;
    fseek($fichierElectro, 0);
    fputs($fichierElectro, $rangElectro);

    return $category.'_'.$rangElectro;
}