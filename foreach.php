<?php
$nama = array("Andri","Joko","Sukma","Rina","Sari");
 
foreach ($nama as $val)
{
   echo "$val";
   echo "<br />";
}
?>

<?php
$nama = array(
        1=>"Andri",
        6=>"Joko",
        12=>"Sukma",
        45=>"Rina",
        55=>"Sari");
 
foreach ($nama as $kunci =>$isi)
{
   echo "$kunci = $isi";
   echo "<br />";
}
?>