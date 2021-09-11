<?php

function luas_lingkaran(){
    $jari = 7;
    $phi = 22/7;
    $luas = $phi * $jari * $jari;
    return $luas;
}

function luas_segitiga(){
    $alas = 2;
    $tinggi = 6;
    $luas = 1/2 * $alas * $tinggi;
    return $luas;
}

function luas_persegipanjang(){
    $panjang = 7;
    $lebar = 2;
    $luas = $panjang * $lebar;
    return $luas;
}

echo "Luas Lingkaran : ".luas_lingkaran();
echo "<br>";
echo "Luas Segitiga : ".luas_segitiga();
echo "<br>";
echo "Luas Persegi Panjang : ".luas_persegipanjang();

?>