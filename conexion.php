<?php
$servername = "https://db4free.net/phpMyAdmin/index.php?route=/database/structure&db=universidad_proy";
$database = "universidad_proy";
$username = "gatitolover01";
$password = "equipoGl01";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>