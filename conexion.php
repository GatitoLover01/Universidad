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
/*NOOOOOOOOOOOOOOOOOOOOOOOOOO BORRAR
if ($result = mysqli_query($conn, "SELECT * FROM profesores")) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
  }  */
mysqli_close($conn);
?>