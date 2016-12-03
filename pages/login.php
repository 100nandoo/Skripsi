<?php
mysql_connect("localhost", "root", "");
mysql_select_db("skripsi");

session_start();
if(!empty($_POST['username']) && !empty($_POST['password'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  //echo "user=" . $username . " pass" . $password . "\n";
  $sql="SELECT * FROM logintable WHERE user='$username' and pass='$password'";
  $result=mysql_query($sql);
  /// Mysql_num_row is counting table row
  $count=mysql_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count==true){
    // Register $myusername, $mypassword and redirect to file "login_success.php"
    //$_SESSION["username"];
    $_SESSION['username'] = $_POST['username'];
    header('Location: dashboard.php');
    exit;
  }
  else {
    echo "Username atau password anda tidak cocok.";
  }
}

// Cek jika user sudah login atau belum
if (!isset($_SESSION['username'])) {
  header('Location: ../index.php');
}
?>
