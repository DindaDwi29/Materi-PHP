<?php

//class manusia
class manusia{
   
    
    public function __construct($nama,$jk,$kelas){
        echo "Nama Saya : ".$nama."<br/>";
        echo "Jenis Kelamin : ".$jk."<br/>";
        echo "Kelas : ".$kelas."<br/>";
        echo "<hr>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia("Cecep","Laki-laki","XII RPL 1");
$manusia = new manusia("Ridwan","Laki-laki","XII RPL 2");
$manusia = new manusia("Dinda","Perempuan","XII RPL 3");

?>
