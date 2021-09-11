<?php
$data = [
            [
                'nama' => "Palah",
                'buah' => [
                    ['jenis' => "Mangga"],
                    ['jenis' => "Apel"],
                    ['jenis' => "Pear"]

                ]
            ]
            // [
            //     'nama' => "Meylani",
            //     'buah' => "Anggur"
            // ]
        ];

foreach ($data as $data2){
    echo "Nama Pemilik : " . $data2['nama'] . "<br>";
    echo "Buah Kesukaan : ";
    echo "<ul>";
    foreach ($data2 ['buah'] as $data3){
        echo "<li>" .$data3['jenis'] . "</li>";
    }
   
    echo "</ul>";
}
?>