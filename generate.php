<?php

include('template.php');
ptop();

$n = 0;
$sigX1kuadrat = 0;
$sigX2kuadrat = 0;
$sigYkuadrat = 0;
$sigY = 0;
$sigX1 = 0;
$sigX2 = 0;
$sigX1X2 = 0;
$sigX1Y = 0;
$sigX2Y = 0;
$rX1Y = 0;
$rX2Y = 0;
$Y = '';

$sql = "SELECT re.responden, ((kua.p1+kua.p2+kua.p3+kua.p4+kua.p5+kua.p6+kua.p7+kua.p8+kua.p9)/9) AS average_kualitas, ((har.p10+har.p11+har.p12)/3) AS average_harga, ((kep.p13+kep.p14+kep.p15+kep.p16+kep.p17+kep.p18+kep.p19+kep.p20+kep.p21+kep.p22)/10) AS average_keputusan  FROM recap re
              JOIN harga_produk har ON re.harga = har.responden
              JOIN kualitas_produk kua ON re.kualitas = kua.responden
              JOIN keputusan_pembelian kep ON re.kualitas = kep.responden
              GROUP BY re.responden";
$hasil = mysqli_query($db,$sql) or die("error: ".mysqli_error($db));
while($result = mysqli_fetch_assoc($hasil)){

	//Sigma Y
	$sigY += $result['average_keputusan'];
	//Sigma X1
	$sigX1 += $result['average_kualitas'];
	//Sigma X2
	$sigX2 += $result['average_harga'];
  //Sigma X1 Kuadrat
  $sigX1kuadrat = $sigX1kuadrat + ($result['average_kualitas'] * $result['average_kualitas']);
  //Sigma X2 Kuadrat
  $sigX2kuadrat = $sigX2kuadrat + ($result['average_harga'] * $result['average_harga']);
  //Sigma Y Kuadrat
  $sigYkuadrat = $sigYkuadrat + ($result['average_keputusan'] * $result['average_keputusan']);
	//Sigma X1*X2
	$sigX1X2 = $sigX1X2 + ($result['average_kualitas'] * $result['average_harga']);
	//Sigma X1*Y
	$sigX1Y = $sigX1Y + ($result['average_kualitas'] * $result['average_keputusan']);
	//Sigma X2*Y
	$sigX2Y = $sigX2Y + ($result['average_harga'] * $result['average_keputusan']);
	//count jumlah data
	$n++;

}
mysqli_close($db);

$KuadratsigX1 = $sigX1 * $sigX1;
$kuadratsigX2 = $sigX2 * $sigX2;
$kuadratsigY = $sigY * $sigY;
$KuadratsigX1X2 = $sigX1X2 * $sigX1X2;

$rX1Y = (($n*$sigX1Y) - ($sigX1*$sigY)) / (sqrt((($n*$sigX1kuadrat) - $KuadratsigX1)) * sqrt(($n*$sigYkuadrat) - $kuadratsigY));

$rX2Y = (($n*$sigX2Y) - ($sigX2*$sigY)) / (sqrt((($n*$sigX2kuadrat) - $kuadratsigX2)) * sqrt(($n*$sigYkuadrat) - $kuadratsigY));

$b1 = (($kuadratsigX2*$sigX1Y)-($sigX2Y*$sigX1X2)) / (($KuadratsigX1*$kuadratsigX2)-($KuadratsigX1X2));

$b2 = (($KuadratsigX1*$sigX2Y) - ($sigX1Y*$sigX1X2)) / (($KuadratsigX1*$kuadratsigX2)-($KuadratsigX1X2));

$a = (($sigY)-($b1*$sigX1) - ($b2*$sigX2)) / $n;

?>
      <div class="container text-white">
        <div class="section-title text-center">
          <h3 class="text-white">Calculate the Prediction</h3>
        </div>
  		<div class="row">
  			<div class="col-md-12">
  				<form action="tampil_hasil.php" method="post">
  				<div class="form-group row">
					<div class="col">
						<div class="input-group-icon mt-10">
							<div class="icon text-dark">X1</div>
							<input type="text" name="txtx1" required class="single-input">
						</div>
					</div>
					<div class="col">
						<div class="input-group-icon mt-10">
							<div class="icon text-dark">X2</div>
							<input type="text" name="txtx2" required class="single-input">
						</div>
					</div>
          <div class="col">

          </div>
  				</div>
          <div class="form-group row">
            <div class="col">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">a</div>
                <input type="text" class="single-input" name="txta" value="<?php echo $a; ?>" readonly>
              </div>
            </div>
            <div class="col">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">b1</div>
                <input type="text" class="single-input" name="txtb1" value="<?php echo $b1; ?>" readonly>
              </div>
            </div>
            <div class="col">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">b2</div>
                <input type="text" class="single-input" name="txtb2" value="<?php echo $b2; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">RX1Y</div>
                <input type="text" class="single-input" name="txtrx1y" value="   <?php echo $rX1Y; ?>" readonly>
              </div>
            </div>
            <div class="col">
              <div class="input-group-icon mt-10">
                <div class="icon text-dark">RX2Y</div>
                <input type="text" class="single-input" name="txtrx2y" value="   <?php echo $rX2Y; ?>" readonly>
              </div>
            </div>
            <div class="col">
              <div class="input-group-icon mt-10">

              </div>
            </div>
          </div>
          <hr>
          <br>
          <br>
          <div class="form-group row">
            <div class="col col-md-4">
              <input type="submit" class="genric-btn info circle" name="btnGenerate" value="Kesimpulan">
            </div>
          </div>
  				</form>
  			</div>
  		</div>
  	</div>
<?php pbottom() ?>
