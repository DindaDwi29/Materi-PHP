<!DOCTYPE html>
<html>
<head>
 <title> Form Input</title>
 </head>
   <body>
   <h2>Form Pengulangan</h2>
   <!-- form -->
    <form method = "POST" action = " ">
     <table>
      <tr>
         <td> Masukan Angka </td>
         <td> : </td>
         <td><input type ='text' name='angka'></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" name="simpan" value='KIRIM'></td>
        </tr>
     </table>
    </form>
    </body>
</html>

<?php

if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];

$i = 10;
for ($a=$i; $a > 0; $a--){
    for ($b=1; $b <= $a; $b++){
        echo "&nbsp";

    }
    for($a1 = $i; $a1 >= $a; $a1--){
        echo "*";
    }
    echo "<br>";
}
}
?>