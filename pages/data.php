<!-- stylesheet-->
<link rel="stylesheet" href="../css/bootstrap.css" />
<link rel="stylesheet" href="../css/dataTables.bootstrap.css" />

<!-- Include Javascript library-->
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>

<?php
require('connect.php');

$peng = mysqli_query($conn,"SELECT * FROM pengunjung");
$buku = mysqli_query($conn,"SELECT * FROM buku_tamu");
$jumlah_pengunjung = mysqli_query($conn,"SELECT jumlah FROM jumlah_pengunjung");
$all_property = array();
?>


<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
  $('#pengunjung').DataTable();
  $('#buku').DataTable();
} );
</script>
<!--Kolom kiri  -->
<div class="col-sm-6 container">
  <h3 class="text-center">Pengunjung yang Terdaftar</h3><hr>

  <table id="pengunjung" class="table table-striped table-bordered table-hover">
    <thead>
      <th>nama</th>
      <th>uid</th>
      <th>privilege</th>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_array($peng)) { ?>
        <tr>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['uid']; ?></td>
          <td><?php echo $row['privilege']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>


    <?php $row = mysqli_fetch_array($jumlah_pengunjung) ?>
    <h4>Jumlah pengunjung: <?php echo $row['jumlah'] ?></h4>
    <br>
    <form action="delVisitor.php" class="form-signin" method="post">
      <h3 class="form-signin-heading text-center">Hapus Pengunjung Terdaftar</h3><hr>
      <div class="col-sm-8">
        <input type="text" name="nama" id="nama" class="form-control form-group" placeholder="username" required autofocus>
      </div>
      <div class="col-sm-4">
        <button class="btn btn-lg btn-danger btn-block btn-sm" type="submit">Delete</button>
      </div>
    </form>
  </div>
  <!-- Kolom Kanan -->
  <div class="col-sm-6">
    <h3 class="text-center">Buku Tamu</h3><hr>
    <table id="buku"class="table table-striped table-bordered table-hover">
      <thead>
        <th>uid</th>
        <th>masuk</th>
        <th>keluar</th>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_array($buku)) { ?>
          <tr>
            <td><?php echo $row['uid']; ?></td>
            <td><?php echo $row['masuk']; ?></td>
            <td><?php echo $row['keluar']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
