<?php
session_start();

// Cek jika user sudah login atau belum
if (isset($_SESSION['username'])) {
header('Location: pages/dashboard.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- include Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <!-- include Fpnt Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.css" />
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <form action="pages/login.php" class="form-signin" method="post">
          <h2 class="form-signin-heading">Smart Lab login</h2>
          <div class="form-group">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="username" required autofocus>
          </div>
          <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
      </div>
      <div class="col-sm-3"></div>
    </div>
  </div>

</div>

</body>
</html>
