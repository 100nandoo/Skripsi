<?php
require('connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully|";

$nama=$_POST['nama'];
$uid=$_POST['uid'];
$privilege = $_POST['priv'];

$sql = "INSERT INTO pengunjung (nama, uid, privilege) VALUES ('$nama', '$uid', '$privilege')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: dashboard.php#/addVisitorForm');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<script src="http://localhost:8000/socket.io/socket.io.js">
  socket.close();
</script>
