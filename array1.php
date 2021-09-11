<?php
    //penulisan array 1
    //$nama = array("Andri","Joko","Sukma","Rina","Sari");

    //penulisan array 2 / PHP v 5.4
    //$nama = ['Palah','Meylani','Nabila','Cecep','Adzura'];

    //echo $nama['2'];

        //pembuatan array
    //$nama = array (
        //1 => "Andri",
        //2 => "Joko",
        //3 => "Sukma",
        //4 => "Rina",
        //5 => "Sari");

            //cara akses array
       // echo "Kelompok 1 : ".$nama[5]."&".$nama[4];
       // echo "<br>";
       // echo "Kelompok 2 : ".$nama[3]."&".$nama[1];

       //array assosiatif
       //$arrNilai = array (
           //"Ani"  => 80,
           //"Otim" => 90,
           //"Ana"  => 75,
          // "Budi" => 85
      // );
       
       //echo $arrNilai['Ana'];
       //echo " ";
       //echo $arrNilai['Otim'];

    //$buah = array (
       // 1 => "semangka",
       // 2 => "melon",
        //3 => "anggur",
        //4 => "strawberry",
       // 5 => "alpukat");

   // $warna = array (
       // 1 => "hijau",
       // 2 => "merah",
       // 3 => "ungu");

        //cara akses array
      //  echo "Buah ".$buah[3] ." Berwarna ".$warna[3];

      //array assosiatif 2
      $employee = [];
      $employee['name'] = 'john';
      $employee['email']= 'john@example.com';
      $employee['phone'] = '1234567890';

      echo "Nama : ".$employee['name'];
      echo "<br>";
      echo "Email : ".$employee['email'];
      echo "<br>";
      echo "Phone : ".$employee['phone'];



?>