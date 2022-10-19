<?php
$servername = "gatitolover01.freeoda.com";
$database = "469446";
$username = "469446";
$password = "equipoGL01";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>