<?php
//class manusia
class manusia{
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "Ini adalah method DESTRUCT";
    }
    //method manusia
    function nama(){
        echo "<br>Nama Saya Adalah Dinda<br>";
    }
    //method construct di jalankan pertama kali
    function __construct(){
        echo "Ini adalah method CONSTRUCT";
    }
    
    
}
$cetak = new manusia();


echo $cetak -> nama();
?>