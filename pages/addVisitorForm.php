<script src="http://localhost:8000/socket.io/socket.io.js"></script>
<script>
var socket = io.connect('http://localhost:8000');
socket.on('EventKirim', function(data){
	document.getElementById("uid").value = data.message;
});
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Pengunjung</title>
</head>
<body>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<form action="addVisitor.php" class="form-signin form-horizontal" method="post">
			<h2 class="form-signin-heading text-center">Add New Visitor</h2><hr>
			<input type="text" name="nama" id="nama" class="form-control form-group" placeholder="username" required autofocus>
			<input type="text" name="uid" id="uid" class="form-control form-group" placeholder="uid" required data-toggle="tooltip" data-placement="right" title="Tooltip on bottom">
			<div class="form-inline form-group">
				<strong class="col-sm-3 control-label">Privilege </strong>
				<select id="privilege" class="col-sm-9 form-control" >
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</div>

			<button class="btn btn-lg btn-primary btn-block form-group" type="submit">Submit</button>
		</form>
	</div>
	<div class="col-sm-4"></div>
</body>
</html>
