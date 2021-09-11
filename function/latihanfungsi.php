<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Nilai Ujian 12 RPL<br></h2>
    
    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Matematika</th>
        <th>Bahasa Inggris</th>
        <th>Bahasa Indonesia</th>        
        <th>kejuruan</th>
        <th>Rata-Rata</th>
        <th>Status</th>
        <th>Grade</th>
    </tr>
    <?php
        function penjumlahan($nama ,$mtk,$inggris,$indo,$kejuruan){
            echo"<tr>";
            echo"<th>$nama";
            echo"</th>";
            echo"<th>$mtk";
            echo"</th>";
            echo"<th>$inggris";
            echo"</th>";
            echo"<th>$indo";
            echo"</th>";
            echo"<th>$kejuruan";
            echo"</th>";
            $rata=($mtk+$indo+$inggris+$kejuruan)/4;
            echo"<th>$rata";
            echo"</th>";
            
            if ($rata >= 75 ) {
                echo "<td>Lulus</td>";
            }else {
                echo "<td>Tidak Lulus</td>";
    
            }
            echo "<center><b>";
            if ($rata >= 90 && $rata <= 100) {
                echo "<td>A</td>";
            }else if ($rata >= 80 && $rata <= 89) {
                echo "<td>B</td>";
            }else if ($rata >= 70 && $rata <= 79) {
                echo "<td>C</td>";
            }else if ($rata >= 50 && $rata <= 74) {
                echo "<td>D</td>";
            }else if ($rata >= 0 && $rata <= 49) {
                echo "<td>E</td>";
            }
            echo "</b></center>";
        
        echo"</tr>";
    }
    penjumlahan("Dinda Dwi",99,80,70,100);
    penjumlahan("Cindy N A",60,75,70,80);
    ?>

</table>
</center>
</body>
</html>