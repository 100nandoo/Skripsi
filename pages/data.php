<?php require('connect.php'); ?>

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
    <h4>Pengunjung saat ini: <?php echo $row['jumlah'] ?> orang</h4>
    <br>
    <div>
      <h3 class="text-center">Ubah Data Pengunjung</h3><hr>
      <form action="delVisitor.php" class="form-inline form-group" method="post">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" required autofocus>
          <button class="btn btn-lg btn-danger btn-sm" type="submit">Hapus</button>
      </form>
    </div>
    <form action="ubahPriv.php" class="form-inline form-group" method="post">
        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" required autofocus>
        <strong class="text-center control-label">Privilege:</strong>
        <input type="radio" name="priv" value="1"> 1
        <input type="radio" name="priv" value="2"> 2
        <input type="radio" name="priv" value="3"> 3
        <button class="btn btn-lg btn-primary btn-sm" type="submit">Ubah</button>
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
