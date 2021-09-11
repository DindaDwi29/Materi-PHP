<?php

// sapaPengunjung("Nurul Huda");
// sapaPengunjung("Ibnu Zakariyya");
// sapaPengunjung("Anshori Akbar");

// function sapaPengunjung ($nama) {
//   echo "<h1>Halo {$nama}, selamat datang!</h1>";
//   echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
// }



function luasSegitiga()
{
    $alas = 10;
    $tinggi = 5;
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}

echo "Luas Setitiga : " . luasSegitiga();

?>