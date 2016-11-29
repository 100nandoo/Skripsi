<?php
require('connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully|";

$nama=$_POST['nama'];
$privilege = $_POST['priv'];

$sql = "UPDATE pengunjung SET privilege = $privilege WHERE nama = '$nama'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: dashboard.php#/addVisitorForm');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
