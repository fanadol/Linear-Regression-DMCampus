<?php
include('template.php');
ptop();
?>
<div class="section-title text-center">
  <h3 class="text-white">Linear Regression</h3>
  <span class="text-white text-uppercase">Tabel Data</span>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="progress-table-wrap">
    <table id="myTable" class="progress-table table-responsive">
      <thead class="thead-light">
        <tr>
          <th scope="col"> No </th>
          <th scope="col"> Y </th>
          <th scope="col"> X1 </th>
          <th scope="col"> X2 </th>
          <th scope="col"> Opsi </th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT re.responden, ((kua.p1+kua.p2+kua.p3+kua.p4+kua.p5+kua.p6+kua.p7+kua.p8+kua.p9)/9) AS average_kualitas, ((har.p10+har.p11+har.p12)/3) AS average_harga, ((kep.p13+kep.p14+kep.p15+kep.p16+kep.p17+kep.p18+kep.p19+kep.p20+kep.p21+kep.p22)/10) AS average_keputusan  FROM recap re JOIN harga_produk har ON re.harga = har.responden JOIN kualitas_produk kua ON re.kualitas = kua.responden JOIN keputusan_pembelian kep ON re.kualitas = kep.responden GROUP BY re.responden";
          $hasil = mysqli_query($db,$sql) or die("error: ".mysqli_connect_error());
          $i=1;
          while($result = mysqli_fetch_assoc($hasil)){

          echo "<tr>";

          echo "<td>".$i++."</td>";

          echo "<td>".$result['average_keputusan']."</td>";

          echo "<td>".$result['average_kualitas']."</td>";

          echo "<td>".$result['average_harga']."</td>";

          echo "<td>
                  <a href='edit_data.php?id=".$result['responden']."'><button class='btn btn-warning'>Edit</button></a>
                  <a href='delete_data.php?id=".$result['responden']."' onClick='return cekHapus();'><button class='btn btn-danger'>Delete</button></a>
                </td>";

          echo "</tr>";

          }
          mysqli_close($db);
        ?>
      </tbody>
    </table>
  </div>
  </div>

<?php pbottom(); ?>
