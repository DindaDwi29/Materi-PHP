<?php

// class
class bangun_datar{
    
    // property

    // method
    function persegi(){
        $sisi = 10;
        $luas = $sisi * $sisi;
        echo "Menghitung Luas Persegi";
        echo "<br>";
        echo "Sisinya = ".$sisi;
        echo "<br>";
        return $luas;
    }

    function segitiga(){
        $alas = 10;
        $tinggi = 5;
        echo "Menghitung Luas Segitiga";
        echo "<br>";
        echo "Alasnya = ".$alas;
        echo "<br>";
        echo "Tingginya = ".$tinggi;
        echo "<br>";
        $luas = 1/2 * $alas * $tinggi;
        return $luas;
    }

    function lingkaran(){
        $jari = 10;
        $phi = 3.14;
        echo "Menghitung Luas Lingkaran";
        echo "<br>";
        echo "Phi = ".$phi;
        echo "<br>";
        echo "Jari-Jarinya = ".$jari;
        echo "<br>";
        $luas = $phi * $jari * $jari;
        return $luas;
    }
}

// object
$luas_persegi = new bangun_datar();
$luas_segitiga = new bangun_datar();
$luas_lingkaran = new bangun_datar();


// menampilkan di browser
echo "Luasnya = ".$luas_persegi -> persegi();
echo "<hr>";

echo "Luasnya = ".$luas_segitiga -> segitiga();
echo "<hr>";

echo "Luasnya = ".$luas_lingkaran -> lingkaran();
echo "<hr>";

?>