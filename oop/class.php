<?php
// class
// class laptop {

//     // property / atribut
//     var $pemilik;
//     var $merk;
//     var $ukuran_layar;

//     //  method / function
//     function hidupkan_laptop() {
//        return "Hidupkan Laptopnya";
//     }

//     function matikan_laptop() {
//         return "Matikan Laptopnya";
//     }

// }

// // object
// $laptop_andi = new laptop ();

// echo $laptop_andi->hidupkan_laptop();
// echo "<br>";
// echo $laptop_andi->matikan_laptop();


class mobil {
  
   
    var $pemilik;
    var $merk;
    var $warna;
   
    
    function hidupkan_mobil($keterangan) {
      return $keterangan;
     }
    // function matikan_mobil() {
    //   return "Matikan Mobil";
    // }
    // function jalankan_mobil() {
    //     return "Jalankan Mobil";
    //   }
 }
   
 
 $mobil_dinda = new mobil();
   
 
//  $mobil_dinda->pemilik="Dinda";
//  $mobil_dinda->merk="Avanza";
//  $mobil_dinda->warna="Hitam";
   
 
//  echo $mobil_dinda->pemilik;
//  echo "<br />";
//  echo $mobil_dinda->merk;
//  echo "<br />";
//  echo $mobil_dinda->warna;
//  echo "<br />";
   
 
 echo $mobil_dinda->hidupkan_mobil("Menghidupkan Mobil !");
 echo "<br />";
//  echo $mobil_dinda->matikan_mobil();
//  echo "<br />";
//  echo $mobil_dinda->jalankan_mobil();


?>