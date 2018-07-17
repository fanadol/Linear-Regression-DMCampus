<?php

include 'template.php';
ptop();

$sql = "SELECT re.responden, kua.p1,kua.p2,kua.p3,kua.p4,kua.p5,kua.p6,kua.p7,kua.p8,kua.p9, har.p10,har.p11,har.p12, kep.p13,kep.p14,kep.p15,kep.p16,kep.p17,kep.p18,kep.p19,kep.p20,kep.p21,kep.p22 FROM recap re
JOIN harga_produk har ON re.harga = har.responden
JOIN kualitas_produk kua ON re.kualitas = kua.responden
JOIN keputusan_pembelian kep ON re.kualitas = kep.responden
WHERE re.responden = ".$_GET['id'];

$query = mysqli_query($db,$sql) or die("Error: ".$sql);
$hasil = mysqli_fetch_assoc($query);

?>

<?php

  if(isset($_POST['btnSubmitEdit'])){

    $p1 = mysqli_real_escape_string($db,$_POST['txtp1']);
    $p2 = mysqli_real_escape_string($db,$_POST['txtp2']);
    $p3 = mysqli_real_escape_string($db,$_POST['txtp3']);
    $p4 = mysqli_real_escape_string($db,$_POST['txtp4']);
    $p5 = mysqli_real_escape_string($db,$_POST['txtp5']);
    $p6 = mysqli_real_escape_string($db,$_POST['txtp6']);
    $p7 = mysqli_real_escape_string($db,$_POST['txtp7']);
    $p8 = mysqli_real_escape_string($db,$_POST['txtp8']);
    $p9 = mysqli_real_escape_string($db,$_POST['txtp9']);
    $p10 = mysqli_real_escape_string($db,$_POST['txtp10']);
    $p11 = mysqli_real_escape_string($db,$_POST['txtp11']);
    $p12 = mysqli_real_escape_string($db,$_POST['txtp12']);
    $p13 = mysqli_real_escape_string($db,$_POST['txtp13']);
    $p14 = mysqli_real_escape_string($db,$_POST['txtp14']);
    $p15 = mysqli_real_escape_string($db,$_POST['txtp15']);
    $p16 = mysqli_real_escape_string($db,$_POST['txtp16']);
    $p17 = mysqli_real_escape_string($db,$_POST['txtp17']);
    $p18 = mysqli_real_escape_string($db,$_POST['txtp18']);
    $p19 = mysqli_real_escape_string($db,$_POST['txtp19']);
    $p20 = mysqli_real_escape_string($db,$_POST['txtp20']);
    $p21 = mysqli_real_escape_string($db,$_POST['txtp21']);
    $p22 = mysqli_real_escape_string($db,$_POST['txtp22']);

    $sql = "START TRANSACTION;";
    $sql .= "UPDATE kualitas_produk SET p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', p8='$p8', p9='$p9' WHERE kualitas_produk.responden = ".$_GET['id'].";";
    $sql .= "UPDATE harga_produk SET p10='$p10', p11='$p11', p12='$p12' WHERE harga_produk.responden = ".$_GET['id'].";";
    $sql .= "UPDATE keputusan_pembelian SET p13='$p13', p14='$p14', p15='$p15', p16='$p16', p17='$p17', p18='$p18', p19='$p19', p20='$p20', p21='$p21', p22='$p22' WHERE keputusan_pembelian.responden = ".$_GET['id'].";";
    $sql .= "COMMIT;";

    mysqli_multi_query($db,$sql) or die("Error: ".mysqli_error($db));
    echo "Data Berhasil Diubah";
    mysqli_close($db);
    ?>
    <br>
    <br>
    <a class="genric-btn warning-border circle" href="index.php">Kembali</a>

<?php

} else { ?>
    <div class="container text-white">
    <h2>Ubah Data</h2>
      <form action="edit_data.php?id=<?php echo $_GET['id']; ?>" method="post">
      <div class="row">
        <div class="col-lg-12 text-center">
        <p>Kualitas Produk</p>
        <!-- <form action="" method="post" class="form-horizontal"> -->
        <div class="row">
          <div class="col-lg-4">
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P1</span>
            <input type="text" required class="single-input" name="txtp1" size="5" value="<?php echo $hasil['p1']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P2</span>
            <input type="text" required class="single-input" name="txtp2" size="5" value="<?php echo $hasil['p2']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P3</span>
            <input type="text" required class="single-input" name="txtp3" size="5" value="<?php echo $hasil['p3']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P4</span>
            <input type="text" required class="single-input" name="txtp4" size="5" value="<?php echo $hasil['p4']; ?>">
          </div>
          </div>
            <div class="col-lg-4">
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P5</span>
            <input type="text" required class="single-input" name="txtp5" size="5" value="<?php echo $hasil['p5']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P6</span>
            <input type="text" required class="single-input" name="txtp6" size="5" value="<?php echo $hasil['p6']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P7</span>
            <input type="text" required class="single-input" name="txtp7" size="5" value="<?php echo $hasil['p7']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P8</span>
            <input type="text" required class="single-input" name="txtp8" size="5" value="<?php echo $hasil['p8']; ?>">
          </div>
          </div>
            <div class="col-lg-4">
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P9</span>
            <input type="text" required class="single-input" name="txtp9" size="5" value="<?php echo $hasil['p9']; ?>">
          </div>
          </div>
          <br>
        <!-- </form> -->
        </div>
      </div>
<hr>
      <div class="col-lg-12 text-center">
        <p>Persepsi Harga</p>
        <div class="row">
        <div class="col-lg-4">
        <!-- <form action="" method="post" class="form-horizontal"> -->
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P10</span>
            <input type="text" required class="single-input" name="txtp10" size="5" value="<?php echo $hasil['p10']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P11</span>
            <input type="text" required class="single-input" name="txtp11" size="5" value="<?php echo $hasil['p11']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P12</span>
            <input type="text" required class="single-input" name="txtp12" size="5" value="<?php echo $hasil['p12']; ?>">
          </div>
          <br>
        <!-- </form> -->
        </div>
        </div>
      </div>

      <div class="col-lg-12 text-center">
        <p>Keputusan Pembelian</p>
        <div class="row">
        <div class="col-lg-4">
        <!-- <form action="" method="post" class="form-horizontal"> -->
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P13</span>
            <input type="text" required class="single-input" name="txtp13" size="5" value="<?php echo $hasil['p13']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P14</span>
            <input type="text" required class="single-input" name="txtp14" size="5" value="<?php echo $hasil['p14']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P15</span>
            <input type="text" required class="single-input" name="txtp15" size="5" value="<?php echo $hasil['p15']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P16</span>
            <input type="text" required class="single-input" name="txtp16" size="5" value="<?php echo $hasil['p16']; ?>">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P17</span>
            <input type="text" required class="single-input" name="txtp17" size="5" value="<?php echo $hasil['p17']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P18</span>
            <input type="text" required class="single-input" name="txtp18" size="5" value="<?php echo $hasil['p18']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P19</span>
            <input type="text" required class="single-input" name="txtp19" size="5" value="<?php echo $hasil['p19']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P20</span>
            <input type="text" required class="single-input" name="txtp20" size="5" value="<?php echo $hasil['p20']; ?>">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P21</span>
            <input type="text" required class="single-input" name="txtp21" size="5" value="<?php echo $hasil['p21']; ?>">
          </div>
          <div class="input-group-icon mt-10">
            <span class="icon text-dark">P22</span>
            <input type="text" required class="single-input" name="txtp22" size="5" value="<?php echo $hasil['p22']; ?>">
          </div>
          <br>
        <!-- </form> -->
        </div>
        </div>
      </div>
      </div>
      <hr>
      <input type="submit" class="genric-btn success circle" name="btnSubmitEdit" value="Update">
      </form>
<?php
}
pbottom();
?>
