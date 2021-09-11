<!DOCTYPE html>
<html>
<head>
 <title> Form Biodata Diri</title>
 </head>
   <body>
   <h2>Form Biodata Diri</h2>
    <form method = "POST" action = " ">
     <table>
      <tr>
         <td> Nama </td>
         <td> : </td>
         <td><input type ='text' name='nama'></td>
        </tr>
        <tr>
         <td> Tempat Lahir </td>
         <td> : </td>
         <td><input type ='text' name='tempat'></td>
        </tr>
        <tr>
         <td> Tanggal Lahir </td>
         <td> : </td>
         <td><input type ='date' name='tanggal'></td>
        </tr>
        <tr>
         <td> Jenis Kelamin </td>
         <td> : </td>
         <td>
         <input type ='radio' name='jenis' value = 'Perempuan'>Perempuan
         <input type ='radio' name='jenis' value = 'Laki-Laki'>Laki-Laki
         </td>
                
        </tr>
        <tr>
         <td> Alamat </td>
         <td> : </td>
         <td>
         <textarea name='alamat' cols = '40' rows = '5'></textarea>
         </td>
        </tr>
        <tr>
         <td> Agama </td>
         <td> : </td>
         <td>
         <select name = 'agama'>
         <option value = 'Islam'>Islam</option>
         <option value = 'Kristen'>Kristen</option>
         <option value = 'Katholik'>Katholik</option>
         <option value = 'Protestan'>Protestan</option>
         <option value = 'Budha'>Budha</option>
         <option value = 'Hindu'>Hindu</option>
         <option value = 'Konghucu'>Konghucu</option>
         </td>
        </tr>
        <tr>
         <td> Pendidikan Terakhir </td>
         <td> : </td>
         <td>
         <select name = 'pendidikan'>
         <option value = 'SD'>SD</option>
         <option value = 'SMP/MTs'>SMP/MTs</option>
         <option value = 'SMK/SMA/MA'>SMK/SMA/MA</option>
         <option value = 'Kuliah'>Kuliah</option>
         </td>
        </tr>
        <tr>
         <td> Status </td>
         <td> : </td>
         <td>
         <select name = 'status'>
         <option value = 'Pelajar'>Pelajar</option>
         <option value = 'Mahasiswa'>Mahasiswa</option>
         <option value = 'Sudah Menikah'>Sudah Menikah</option>
         <option value = 'Belum Menikah'>Belum Menikah</option>
         </td>
        </tr>
        <tr>
         <td> Hobi </td>
         <td> : </td>
         <td>
         <input type ='checkbox' name='hobi' value = 'Membaca'>Membaca
         <input type ='checkbox' name='hobi' value = 'Menulis'>Menulis
         <input type ='checkbox' name='hobi' value = 'Mendengarkan Musik'>Mendengarkan Musik
         <input type ='checkbox' name='hobi' value = 'Melukis'>Melukis
         <input type ='checkbox' name='hobi' value = 'Menyanyi'>Menyanyi
         </td>
        </tr>
        <tr>
         <td> Cita - Cita </td>
         <td> : </td>
         <td>
         <select name = 'cita'>
         <option value = 'Dokter'>Dokter</option>
         <option value = 'Pramugari'>Pramugari</option>
         <option value = 'Guru'>Guru</option>
         <option value = 'Programmer'>Programmer</option>
         <option value = 'Pengusaha'>Pengusaha</option>
         </td>
        </tr>
        <tr>
         <td> Kata - Kata Bijak </td>
         <td> : </td>
         <td>
         <textarea name='kata' cols = '40' rows = '5'></textarea>
         </td>
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
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];


    echo "=============BIODATA DIRI=========== <br>";
    echo "==================================== <br>";
    echo "Nama = $nama <br>";
    echo "Tempat Lahir = $tempat <br>";
    echo "Tanggal Lahir = $tanggal <br>";
    echo "Jenis Kelamin = $jenis <br>";
    echo "Alamat = $alamat <br>";
    echo "Agama = $agama <br>";
    echo "Pendidikan Terakhir = $pendidikan <br>";
    echo "Status = $status <br>";
    echo "Hobi = $hobi <br>";
    echo "Cita - Cita = $cita <br>";
    echo "Kata - Kata Bijak = $kata <br>";
}
?>
          
