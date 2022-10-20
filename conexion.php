<?php
$servername = "db4free.net";
$database = "universidad_proy";
$username = "gatitolover01";
$password = "EquipoGl01";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>