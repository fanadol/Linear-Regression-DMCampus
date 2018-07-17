<?php
include('template.php');
ptop();

  if(isset($_POST['btnSubmit'])){

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
    $sql .= "INSERT INTO `kualitas_produk`(`responden`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`,`p8`,`p9`) VALUES ('','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9');";
    $sql .= "SELECT LAST_INSERT_ID() INTO @LASTID;";
    $sql .= "INSERT INTO `harga_produk`(`responden`,`p10`,`p11`,`p12`) VALUES (@LASTID,'$p10','$p11','$p12');";
    $sql .= "INSERT INTO `keputusan_pembelian`(`responden`,`p13`,`p14`,`p15`,`p16`,`p17`,`p18`,`p19`,`p20`,`p21`,`p22`) VALUES (@LASTID, '$p13','$p14','$p15', '$p16','$p17','$p18', '$p19','$p20','$p21', '$p22');";
    $sql .= "INSERT INTO `recap`(`responden`,`kualitas`,`harga`,`keputusan`) VALUES (@LASTID,@LASTID,@LASTID,@LASTID);";
    $sql .= "COMMIT;";

    mysqli_multi_query($db,$sql) or die("Error: ".mysqli_error($db));
    echo "Data Berhasil Ditambahkan";
    mysqli_close($db);



?>
<br><br>
<a class="genric-btn warning-border circle" href="index.php">Kembali  </a>
<?php

} else {

?>
    <div class="container text-white">
      <div class="section-title text-center">
        <h3 class="text-white">Input Data</h3>
      </div>
      <form action="input_data.php" method="post">
      <div class="row">
        <div class="col-lg-12 text-white">
          <p class="text-center">Kualitas Produk</p>
          <!-- <form action="" method="post" class="form-horizontal"> -->
          <div class="row">
            <div class="col-lg-4">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P1</div>
                <input type="text" required class="single-input" name="txtp1" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P2</div>
                <input type="text" required class="single-input" name="txtp2" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P3</div>
                <input type="text" required class="single-input" name="txtp3" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P4</div>
                <input type="text" required class="single-input" name="txtp4" size="5">
              </div>
            <!-- </form> -->
            </div>
            <div class="col-lg-4">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P5</div>
                <input type="text" required class="single-input" name="txtp5" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P6</div>
                <input type="text" required class="single-input" name="txtp6" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P7</div>
                <input type="text" required class="single-input" name="txtp7" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P8</div>
                <input type="text" required class="single-input" name="txtp8" size="5">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P9</div>
                <input type="text" required class="single-input" name="txtp9" size="5">
              </div>
              <br>
            </div>
          </div>
        </div>
        <hr>
      <div class="col-lg-12 text-center">
        <p>Persepsi Harga</p>
        <!-- <form action="" method="post" class="form-horizontal"> -->
          <div class="row">
            <div class="col-lg-4">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P10</div>
                <input type="text" required class="single-input" name="txtp10" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P11</div>
                <input type="text" required class="single-input" name="txtp11" size="5">
              </div>
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">P12</div>
                <input type="text" required class="single-input" name="txtp12" size="5">
              </div>
              <br>
          </div>
        </div>
      </div>
<hr>
      <div class="col-lg-12 text-center">
        <p>Keputusan Pembelian</p>
        <!-- <form action="" method="post" class="form-horizontal"> -->
        <div class="row">
          <div class="col-lg-4">
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P13</div>
              <input type="text" required class="single-input" name="txtp13" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P14</div>
              <input type="text" required class="single-input" name="txtp14" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P15</div>
              <input type="text" required class="single-input" name="txtp15" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P16</div>
              <input type="text" required class="single-input" name="txtp16" size="5">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P17</div>
              <input type="text" required class="single-input" name="txtp17" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P18</div>
              <input type="text" required class="single-input" name="txtp18" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P19</div>
              <input type="text" required class="single-input" name="txtp19" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P20</div>
              <input type="text" required class="single-input" name="txtp20" size="5">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P21</div>
              <input type="text" required class="single-input" name="txtp21" size="5">
            </div>
            <div class="input-group-icon mt-10">
              <div class="icon text-dark">P22</div>
              <input type="text" required class="single-input" name="txtp22" size="5">
            </div>
          </div>
          <hr>
        <!-- </form> -->
      </div>
      </div>

        <input type="submit" class="genric-btn success circle" name="btnSubmit">
        </form>
        <br>

    </div>

<?php } pbottom(); ?>
