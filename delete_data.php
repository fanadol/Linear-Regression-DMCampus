<?php
include 'template.php';
ptop();

$sql = "START TRANSACTION;";
$sql .="DELETE FROM harga_produk WHERE harga_produk.responden = ".$_GET['id'].";";
$sql .="DELETE FROM kualitas_produk WHERE kualitas_produk.responden = ".$_GET['id'].";";
$sql .="DELETE FROM keputusan_pembelian WHERE keputusan_pembelian.responden = ".$_GET['id'].";";
// $sql .="DELETE FROM recap WHERE recap.kualitas = ".$_GET['id'];
$sql .="COMMIT;";

mysqli_multi_query($db,$sql) or die("Error: ".mysqli_error($db));
echo "Data Telah Dihapus";

?>
<br><br>
<a class="genric-btn warning-border circle" href="index.php">Kembali</a>
<?php pbottom() ?>
