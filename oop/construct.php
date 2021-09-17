<?php

//class manusia
class manusia{
    //property
    var $nama;
    var $warna;
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya dinda <br/>";
    }
    function kelas(){
        return "Saya kelas 12 rpl 3 <br/>";
    }
    function hobi(){
        return "Hobi saya memasak <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
echo $manusia->kelas();
echo $manusia->hobi();