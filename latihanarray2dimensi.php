<?php
//  $artikel = [
//     ['petanikode' => "Belajar PHP & MySQL untuk Pemula"],
//     ['dunia ilkom' => "Tutorial PHP dari Nol hingga Mahir"],
//     ['jago koding' => "Membuat Aplikasi Web dengan PHP"],
//     ['programmer' => "Tutorial Belajar Android"],
//     ['dunia cyber' => "Tutorial Belajar Mikrotik"]];

// echo "ARTIKEL BELAJAR NGODING";
// echo "<br>";
// echo "Judul : ".$artikel[2]['jago koding'].", Dari Penulis :" ."jago koding";
// echo "<br>";
// echo "Judul : ".$artikel[2]['jago koding'].", Dari Penulis :" ."jago koding";


$artikel = [["penulis" =>'petanikode',  "judul" => "Belajar PHP & MySQL untuk Pemula"],
            ["penulis" =>'dunia ilkom', "judul" => "Tutorial PHP dari Nol hingga Mahir"],
            ["penulis" =>'jago koding', "judul" => "Membuat Aplikasi Web dengan PHP"],
            ["penulis" =>'programmer',  "judul" => "Tutorial Belajar Android"],
            ["penulis" =>'dunia cyber', "judul" => "Tutorial Belajar Mikrotik"]];

echo "ARTIKEL BELAJAR NGODING";
echo "<br>";
echo "Judul : ".$artikel[2]['judul'].", Dari Penulis : " .$artikel[2]['penulis'];
echo "<br>";
echo "Judul : ".$artikel[3]['judul'].", Dari Penulis : " .$artikel[3]['penulis'];

?>