<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}

function tentang_saya($nama, $salam = "Hi")
{
    echo $salam . ", ";
    echo "saya " . $nama ." ";
    // memanggil fungsi lain

    echo "dan umur saya " . hitungUmur(2003, 2021) . " tahun<br/>";
}

// memanggil fungsi perkenalan 
echo tentang_saya("dinda dwi octaviani");
?>