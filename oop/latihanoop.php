<?php
class penggajihan{
public $totalgaji;
public $totalpengeluaran;

  public function gaji($jabatan,$pendidikan){
      echo "<h3>Pendapatan</h3>";
      if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
        echo "<tr>";
        echo "<td>Gaji Pokok : Rp.$gaji<br></td>";
        echo "</tr>";
    }
    
    else if($jabatan == "Manager"){
        $gaji = 5000000;
      
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>Gaji Pokok : Rp.$gaji<br></td>";
        echo "</tr>";
    
        
    }
    else if($jabatan == "Karyawan"){
        $gaji = 3000000;
        
        echo "<tr>";
        echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
        echo "<tr>";
        echo "<td>Gaji Pokok : Rp.$gaji<br></td>";
        echo "</tr>";
        
    }else {
        
        echo "ERROR";
        
    }
      echo "<tr>";
        
        echo "</tr>";
        if($pendidikan == "S1"){
            $tunjangan = 2000000;
           
            echo "<td>Pendidikan : $pendidikan</td><br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan : Rp.$tunjangan<br></td>";
            echo "</tr>";
        }
      $this->totalgaji=$gaji+$tunjangan;
      echo "Total Gaji : $this->totalgaji <br><hr>";
      
    
  }


    public function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<h3>Pengeluaran</h3>";
        echo "Bayar listrik : $listrik<br>";
        echo "Bayar kontrakan : $kontrakan<br>";
        echo "Cicilan Kendaraan : $kendaraan<br>";
        $this->totalpengeluaran = $listrik+$kontrakan+$kendaraan;
        echo "Total Pengeluaran : $this->totalpengeluaran <br><hr>";
    }
  
 function sisa(){
     $total= $this->totalgaji-$this->totalpengeluaran;
     echo "<b>Sisa Gaji: $total</b>";
 }
}
$cetak = new penggajihan();
echo $cetak->gaji("Manager","SMP");
echo $cetak->pengeluaran(200000,1000000,600000);
echo $cetak->sisa();
?>