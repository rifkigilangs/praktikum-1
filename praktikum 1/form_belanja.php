<form method="POST" action="form_belanja.php">
  <div class="form-group">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
    <input type="radio" name="produk" value="TV" checked>TV
    <input type="radio" name="produk" value="KULKAS">KULKAS 
    <input type="radio" name="produk" value="MESIN CUCI">MESIN CUCI
    </div>
  </div>
  <div class="form-group">
    <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
      
    </div>
  </div> 
  <div class="form-group">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

<?php
echo "<h3> Daftar Harga </h3>";
echo "<hr>";
echo "TV :";
echo "<table width = 250 border =1>
<tr>
<td> 4.200.000 </td>
</tr>
</table>";
?>
<?php
echo "KULKAS :";
echo "<table width = 250 border =1>
<tr>
<td> 3.100.000 </td>
</tr>
</table>";
?>
<?php
echo "MESIN CUCI :";
echo "<table width = 250 border =1>
<tr>
<td> 3.800.000 </td>
</tr>
</table>";
?>
<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$tobel = $_POST['jumlah' * 'harga'];

echo '<br/>Nama Customer : '.$nama_customer;
echo '<br/>Produk Pilihan : '.$produk;
echo '<br/>Jumlah Beli : '.$jumlah;
echo '<br/>Total Belanja : '.$tobel;

?>