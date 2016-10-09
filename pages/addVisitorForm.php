<script src="http://localhost:8000/socket.io/socket.io.js"></script>
<script>
var socket = io.connect('http://localhost:8000');
socket.on('EventKirim', function(data){
	document.getElementById("uid").value = data.message;
});
</script>

<div class="col-sm-4"></div>
<div class="col-sm-4">
  <form action="addVisitor.php" class="form-signin" method="post">
    <h2 class="form-signin-heading text-center">Add New Visitor</h2>
      <input type="text" name="nama" id="nama" class="form-control form-group" placeholder="username" required autofocus>
      <input type="text" name="uid" id="uid" class="form-control form-group" placeholder="uid" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  </form>
</div>
<div class="col-sm-4"></div>
