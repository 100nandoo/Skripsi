<?php require('connect.php'); ?>

<script>
var socket = io.connect('http://localhost:8000');

$('#ledSet1').on('click',function(){
	socket.emit('led1');
});
$('#ledSet2').on('click',function(){
	socket.emit('led2');
});
$('#ledSet3').on('click',function(){
	socket.emit('led3');
});
$('#ledSet4').on('click',function(){
	socket.emit('led4');
});
$('#ledSet5').on('click',function(){
	socket.emit('led5');
});
$('#ledSet6').on('click',function(){
	socket.emit('led6');
});

$('#ledSet12').on('click',function(){
	socket.emit('led12');
});
$('#ledSet34').on('click',function(){
	socket.emit('led34');
});
$('#ledSet56').on('click',function(){
	socket.emit('led56');
});
$('#ledSetAll').on('click',function(){
	socket.emit('ledAll');
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
				<div class="btn-group" role="group" aria-label="baris1">
					<button id="ledSet1" type="button" class="btn btn-primary" autocomplete="off">LED 1</button>
					<button id="ledSet2" type="button" class="btn btn-primary" autocomplete="off">LED 2</button>
					<button id="ledSet12" type="button" class="btn btn-warning" autocomplete="off">Baris 1</button>
				</div>
				<div class="btn-group" role="group" aria-label="baris2">
					<button id="ledSet3" type="button" class="btn btn-primary" autocomplete="off">LED 3</button>
					<button id="ledSet4" type="button" class="btn btn-primary" autocomplete="off">LED 4</button>
					<button id="ledSet34" type="button" class="btn btn-warning" autocomplete="off">Baris 2</button>
				</div>
				<div class="btn-group" role="group" aria-label="baris3">
					<button id="ledSet5" type="button" class="btn btn-primary" autocomplete="off">LED 5</button>
					<button id="ledSet6" type="button" class="btn btn-primary" autocomplete="off">LED 6</button>
					<button id="ledSet56" type="button" class="btn btn-warning" autocomplete="off">Baris 3</button>
				</div>
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
