<?php
$data = [['jenis' => "Olahraga", 'cabang' => [
    ['lomba' => "Sepak Bola", 'artikel' => [
        ['judul'=> "Sepak Bola Nasional"],
        ['judul' => "Sepak Bola Internasional"]
    ]],
    ['lomba' => "Bulu Tangkis", 'artikel' => [
        ['judul'=> "Bulu Tangkis Nasional"],
        ['judul' => "Bulu Tangkis Internasional"]
    ]],
    ['lomba' => "Atletik", 'artikel' => [
        ['judul' => "Atletik Nasional"],
        ['judul' => "Atletik Internasional"]
    ]]
]], 

['jenis' => "Ekonomi", 'cabang' => [
    ['lomba' => "Saham", 'artikel' => [
        ['judul'=> "Investasi Saham Perusahaan"],
        ['judul' => "Jual Beli Saham"]
    ]],
    ['lomba' => "Bank", 'artikel' => [
        ['judul'=> "BCA"],
        ['judul' => "BRI"]
    ]]
    
]],

['jenis' => "Politik", 'cabang' => [
    ['lomba' => "Hukum", 'artikel' => [
        ['judul'=> "Pasal Pasal Negara Terdapat Dalam UU NRI Tahun 1945"],
        ['judul' => "Peraturan Hukum Yang Ditetapkan Pemerintah"]
    ]],
    ['lomba' => "Pemerintahan", 'artikel' => [
        ['judul'=> "Pemilihan Presiden Dan Wakil Presiden "],
        ['judul' => "Pemilihan Mentri Dan Jajarannya"]
    ]]
    
]],
    ];
 
    echo "Artikel : Detik.com";
    echo "<br>";
    echo "Jenis Berita : ";

    foreach($data as $data1){
        echo "<ul>";
        echo "<li>" .$data1['jenis'] ."</li>";

        foreach ($data1['cabang'] as $data2){
            echo "<ul>";
            echo "<li>" .$data2['lomba'] ."</li>";

            foreach($data2['artikel'] as $data3){
                echo "<ul>";
                echo "<li>" .$data3['judul'] ."</li>";
                echo "</ul>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }
?>