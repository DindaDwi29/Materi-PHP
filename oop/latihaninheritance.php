<?php

//class utama
class bangundatar{
    public $luaspersegi;
    

        
    public $luaspersegipanjang;
    
    public $luassegitiga;
    
    public $lingkaran;
    
}

class persegi extends bangundatar{ 
    public function luaspersegi($sisi){
        echo "Menghitung luas Persegi<br>";
        echo "Sisinya : ".$sisi;
        echo "<br>";
        $this->luaspersegi=$sisi*$sisi;
        $this->kelilingpersegi=4 * $sisi;
        echo "Luasnya : ".$this->luaspersegi;
        echo "<br>";
        echo "Kelilingnya : ".$this->kelilingpersegi;
        echo "<br><hr>";
        
}
}
class persegipanjang extends bangundatar{ 
    public function luaspersegipanjang($panjang,$lebar){
        echo "Menghitung luas Persegi Panjang<br>";
    
        echo "Panjang :".$panjang;
        echo "<br>";
        echo "Lebar :".$lebar;
        echo "<br>";
        $this->luaspersegipanjang=$panjang*$lebar;
        $this->kelilingpersegipanjang=2*($panjang+$lebar);
        echo "Luasnya :".$this->luaspersegipanjang;
        echo "<br>";
        echo "Kelilingnya : ".$this->kelilingpersegipanjang;
        echo "<br><hr>";
        
}
}
class segitiga extends bangundatar{ 
    public function luassegitiga($alas,$tinggi){
        echo "Menghitung luas segitiga<br>";
        echo "Alas :".$alas;
        echo "<br>";
        echo "tinggi :".$tinggi;
        echo "<br>";
        $this->luassegitiga=1/2*$alas*$tinggi;
        $this->kelilingsegitiga=$alas * 3;
        echo "Luasnya :".$this->luassegitiga;
        echo "<br>";
        echo "Kelilingnya : ".$this->kelilingsegitiga;
        echo "<br><hr>"; 
    }
}
class lingkaran extends bangundatar{ 
    public function luaslingkaran($phi,$jari){
        echo  "Menghitung Luas lingkaran<br>";
        echo  "Phi = $phi<br>";
        echo  "Jari - jari = $jari <br>";
      
      $this->luaslingkaran= $phi* $jari *$jari;
      echo  "Luasnya : ".$this->luaslingkaran;
      echo "<br>";
      $this->kelilinglingkaran = 2 * $phi *$jari;
      echo "Keliling : ".$this->kelilinglingkaran;
    }
}
//instansiasi class teman
$cetak= new persegi;
$cetak->luaspersegi(5);
$cetak1= new persegipanjang;
$cetak1->luaspersegipanjang(10,5);
$cetak2=new segitiga;
$cetak2->luassegitiga(10,4);
$cetak3=new lingkaran;
$cetak3->luaslingkaran(3.14,7);