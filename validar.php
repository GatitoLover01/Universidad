<?php

$usuario = $_POST['matricula'];
$pass = $_POST['pass'];
if(empty($usuario) || empty($pass)){
header("Location: login_alumno.html");
exit();
}
$servername = "db4free.net";
$database = "universidad_proy";
$username = "gatitolover01";
$password = "EquipoGl01";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database) or die("Error al conectar " . mysqli_error());
//mysql_select_db('universidad_proy') or die ("Error al seleccionar la Base de datos: " . mysqli_error());
//include('conexion.php');
$result = mysqli_query($conexion, "SELECT * from alumnos where Matricula_alumno='" . $usuario . "'");
if($row = mysqli_fetch_array($result)){
if($row['Contrasena'] == $pass){
session_start();
$_SESSION['Matricula_alumno'] = $usuario;
header("Location: alumno.html");
}else{
header("Location: login_alumno.html");
exit();
}
}else{
header("Location: login_alumno.html");
exit();
}
?>