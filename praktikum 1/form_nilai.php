<!DOCTYPE html>
<html>
 <head>
  <style type="text/css">label{display:inline-block;width:120px;margin:5px 0 5px 0;}</style>
 </head>
 <body>
 <h3>Form Nilai Siswa</h3>
 <form method="GET" action="array_siswa.php">   
 <label for="nama_lengkap">Nama Lengkap</label> <input type="text" id="nama_lengkap"  name="nama_lengkap" /><br />
 <label>Mata Kuliah</label>
 <select name="matkul">
 <option value="DDP">Dasar-Dasar Pemrograman</option>
 <option value="BDI">Basis Data I</option>>
 <option value="WEB1">Pemrograman Web</option>
 </select><br/>
 <label>Nilai UTS</label>
 <input type="text" name="nilai_uts" value="" size="6"/><br/>
 <label>Nilai UAS</label>
 <input type="text" name="nilai_uas" value="" size="6"/><br/>
 <label>Tugas/Praktikum</label>
 <input type="text" name="nilai_tugas" value="" size="6"/><br/>
 <input type="submit" value="Simpan" name="proses"/>
 </form>
 </body>
</html>

    <?php
    $proses= $_GET['proses']; 
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_UTS = $_GET['nilai_uts'];
    $nilai_UAS = $_GET['nilai_uas'];
    $nilai_Tugas = $_GET['nilai_tugas'];
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_UTS;
    echo '<br/>Nilai UAS : '.$nilai_UAS;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_Tugas;
?>