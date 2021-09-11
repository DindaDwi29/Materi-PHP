<?php

// function perkenalan($a,$b){
//     echo "Perkenalkan, nama saya ".$a."<br/>";
//     echo "Umur saya ".$b." Tahun <br/>";
// }

// if ($b >= 17) {
//     echo "Anda Sudah Memiliki Identitas";
// }else  {
//     echo "Anda Belum Memiliki Identitas";
// }
// perkenalan("Dinda", 17);

// function penjumlahan($angka1,$angka2){

//     $tambah = $angka1 + $angka2;
//     $kurang = $angka1 - $angka2;
//     $kali = $angka1 * $angka2;
//     $bagi = $angka1 / $angka2;

//     echo "Hasil Penjumlahan ".$tambah."<br/>" ;
//     echo "Hasil Pengurangan ".$kurang."<br/>" ;
//     echo "Hasil Perkalian ".$kali."<br/>" ;
//     echo "Hasil Pembagian ".$bagi."<br/>" ;
// }

//     penjumlahan(10,2);


// function pengurangan($angka1,$angka2){

//     $kurang = $angka1 - $angka2;
    
//     echo "Hasil Pengurangan ".$kurang."<br/>" ;
// }
    
//     pengurangan(10,5);


// function perkalian($angka1,$angka2){

//     $kali = $angka1 * $angka2;
    
//     echo "Hasil Perkalian ".$kali."<br/>" ;
// }
    
//     perkalian(10,5);


// function pembagian($angka1,$angka2){

//     $bagi = $angka1 / $angka2;
    
//     echo "Hasil Pembagian ".$bagi."<br/>" ;
// }
    
//     pembagian(10,2);

// PARAMETER DEFAULT

function penjumlahan($usia,$nama="Dinda"){

    echo "Nama : ".$nama."<br>";
    echo "Usia : ".$usia;
}

    penjumlahan(20);
    
?>