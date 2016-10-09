<?php
require('connect.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully|";

$nama=$_POST['nama'];
$uid=$_POST['uid'];

$sql = "INSERT INTO pengunjung (nama, uid) VALUES ('$nama', '$uid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    sleep(2);
    header('Location: dashboard.php#/addVisitorForm');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
