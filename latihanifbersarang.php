<?php
$pesan = "nasi goreng ";
$harga = 10000;
$jumlah = 6;
$total = $harga * $jumlah;
$diskon = 0.2 * $total;
$totalbayar = $total - $diskon;
$bayar = $totalbayar;


echo "+++ Warung Sejahtera +++ <br>";
 echo "===================== <br>";

 if ($harga == 10000){
    if($total < 50000 && $total >= 0){
    
        echo " Jenis Pesanan : makanan <br>";
        echo " Nama Pesanan : $pesan <br>";
        echo " Jumlah Pesanan : $jumlah <br>";
        echo " Total : $total <br>";
        echo " Total Bayar : $bayar <br>";

    }if ($total >= 50000){
        echo " Jenis Pesanan : Makanan <br>";
        echo " Nama Pesanan : $pesan <br>";
        echo " Jumlah Pesanan : $jumlah <br>";
        echo " Total : $total <br>";
        echo " Diskon 20%: $diskon <br>";
        echo " Total Bayar : $bayar <br>";
    }
}else {
    echo "Uang Kurang";
}

 
?>