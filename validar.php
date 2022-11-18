<?php

$usuario = $_POST['matricula'];
$pass = $_POST['pass'];
if(empty($usuario) || empty($pass)){
header("Location: login_alumno.html");
exit();
}
$servername = "remotemysql.com";
$database = "FgQKdPudUJ";
$username = "FgQKdPudUJ";
$password = "ew5EoQKp3s";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database) or die("Error al conectar " . mysqli_error());

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