<?php
include 'template.php';
ptop();

    if(isset($_POST['btnGenerate'], $_POST['txtx1'], $_POST['txtx2'])){
    $X1 = $_POST['txtx1'];
    $X2 = $_POST['txtx2'];
    $b1 = $_POST['txtb1'];
    $b2 = $_POST['txtb2'];
    $a = $_POST['txta'];
    $rX1Y = $_POST['txtrx1y'];
    $rX2Y = $_POST['txtrx2y'];
    $Y = $a + $b1*$X1 + $b2*$X2;
    $rSquare1 = $rX1Y * $rX1Y;
    $rSquare2 = $rX2Y * $rX2Y;
    $error1 = 1 - $rSquare1;
    $error2 = 1 - $rSquare2;
    }
?>

<div class="container text-white">
  <div class="section-title text-center">
    <h3 class="text-white">Calculate the Prediction</h3>
  </div>
  <br>
  <div class="progress-table-wrap text-dark">
      <table class="progress-table table-responsive table">
        <thead>
          <tr>
            <th>Var</th>
            <th>Nilai</th>
            <th>RSquare</th>
            <th>Error</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Y</td>
            <td><?php echo $Y; ?></td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>rX1Y</td>
            <td><?php echo $rX1Y; ?></td>
            <td><?php echo $rSquare1; ?></td>
            <td><?php echo $error1; ?></td>
          </tr>
          <tr>
            <td>rX2Y</td>
            <td><?php echo $rX2Y; ?></td>
            <td><?php echo $rSquare2; ?></td>
            <td><?php echo $error2; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php pbottom(); ?>
