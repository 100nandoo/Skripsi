<?php
require('connect.php');

$result = mysqli_query($conn,"SELECT * FROM pengunjung");
$all_property = array();
 ?>

<div class="col-sm-4">
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<th>id</th>
			<th>nama</th>
			<th>uid</th>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['uid']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
