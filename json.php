<?php

// $json = '{
//   "nama": "Nurul Huda",
//   "domisili": "Surabaya",
//   "usia": 23,
//   "wni": true,
//   "hobi": [
//   "Berenang", "Berlari", "Bertamasya"
//   ]
// }';
// $mahasiswa = json_decode($json);
// echo "Nama: {$mahasiswa->nama} <br>";
// echo "Domisili: {$mahasiswa->domisili} <br>";
// echo "Hobi: " . implode(", ", $mahasiswa->hobi);


// $mahasiswa = [
//   'nama' => 'Nurul Huda',
//   'domisili' => 'Surabaya'
// ];
// echo json_encode($mahasiswa);


// $nilaiUjian = [70, 80, 50, 90];
// echo json_encode($nilaiUjian);


$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';
  
    // Dikonversikan ke JSON
  $list = json_decode($listMahasiswaJSON);
  
    // Tampilkan datanya
  foreach ($list as $key => $mahasiswa) {
    echo "Nama ke - {$key} : {$mahasiswa->nama} <br>";
  }
  
?>