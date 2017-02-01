<?php require('connect.php'); ?>

<script>
var socket = io.connect('http://localhost:8000');

$('#lampu').on('click',function(){
	socket.emit('lampu');
});
$('#bukaPintu').on('click',function(){
	socket.emit('sol');
});
$('#nyalaAc1').on('click',function(){
	socket.emit('AC1');
});
$('#nyalaAc2').on('click',function(){
	socket.emit('AC2');
});
</script>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="../js/jquery-3.1.1.js"></script>
	<script src="http://localhost:8000/socket.io/socket.io.js"></script>

</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Peralatan</h1><hr>
		<div class="container-fluid col-sm-6" style="background-color:#f5f5f5;">
			<h3 class="text-center">Real Time Controller</h3><hr>
			<p>
					<button id="lampu" type="button" class="btn btn-primary btn-block" autocomplete="off">Lampu</button>
			</p>
			<p>
				<button id="ledSetAll" type="button" class="btn btn-success btn-block btn-lg" autocomplete="off">Semua LED</button>
			</p>
			<div class="btn-group btn-block" role="group" aria-label="tes">
				<button id="bukaPintu" type="button" class="btn btn-info col-sm-6 btn-lg" autocomplete="off">Pintu</button>
				<button id="nyalaAc1" type="button" class="btn btn-default col-sm-3 btn-lg" autocomplete="off">AC 1</button>
				<button id="nyalaAc2" type="button" class="btn btn-default col-sm-3 btn-lg" autocomplete="off">AC 2</button>

			</div>

		</div>
		<div class="container-fluid col-sm-5 col-md-offset-1" style="background-color:#f5f5f5; padding:10px;">
			<h3 class="text-center">Lain - lain</h3><hr>
			<a class="btn btn-primary" href="/phpmyadmin" role="button">Phpmyadmin</a>
		</div>
	</div>
</body>
</html>
