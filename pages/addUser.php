<?php
require('connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully|";

$nama=$_POST['nama'];
$password=$_POST['password'];
$hashed_password = md5($password);
$sql = "INSERT INTO logintable (user, pass) VALUES ('$nama', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: dashboard.php#/home');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script src="http://localhost:8000/socket.io/socket.io.js">
  socket.close();
</script>
