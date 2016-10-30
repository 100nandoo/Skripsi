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
$all_property = array();
?>


<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
  $('#pengunjung').DataTable();
  $('#buku').DataTable();
} );
</script>

<div class="col-sm-4 container">
  <h3 class="text-center">Pengunjung yang Terdaftar</h3>

  <table id="pengunjung" class="table table-striped table-bordered table-hover">
    <thead>
      <th>nama</th>
      <th>uid</th>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_array($peng)) { ?>
        <tr>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['uid']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="col-sm-4">
    <h3 class="text-center">Buku Tamu</h3>
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
