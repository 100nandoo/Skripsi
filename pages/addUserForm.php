<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah User Login</title>
</head>
<body>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<form action="addUser.php" class="form-signin form-horizontal" method="post">
			<h2 class="form-signin-heading text-center">Tambah User Login</h2><hr>
			<input type="text" name="nama" id="nama" class="form-control form-group" placeholder="username" required autofocus>
			<input type="password" name="password" id="password" class="form-control form-group" placeholder="password" required data-toggle="tooltip" data-placement="right" title="Tooltip on bottom">

			<button class="btn btn-lg btn-primary btn-block form-group" type="submit">Submit</button>
		</form>
	</div>
	<div class="col-sm-4"></div>
</body>
</html>
