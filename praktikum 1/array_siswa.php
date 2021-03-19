<form method="POST" action="array_siswa.php">
<?php
$ns1 = ['id'=>1,"nama"=>"Jamal","uts"=>"70","uas"=>'80',"tugas"=>"87"];
$ns2 = ['id'=>2,"nama"=>'','uts'=>'','uas'=>'','tugas'=>''];
$ns3 = ['id'=>3,"nama"=>'','uts'=>'','uas'=>'','tugas'=>''];
$ns4 = ['id'=>4,"nama"=>'','uts'=>'','uas'=>'','tugas'=>''];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>
</form>
<h3>Daftar Nilai Siswa</h3>
<hr>
<table border='2' width="50%">
<thead>
    <tr>
        <th>No</th><th>NAMA</th><th>UTS</th>
        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
    </tr> 
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
</tbody>
</table>