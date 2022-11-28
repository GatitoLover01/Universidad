<?php
require('../conexion/conexion.php');
$usuario = $_POST['matricula'];
$pass = $_POST['pass'];
if(empty($usuario) || empty($pass)){
header("Location:../alumnos/login_alumno.php");
exit();
}

$result = mysqli_query($conexion, "SELECT * from alumnos where Matricula_alumno='" . $usuario . "'");
if($row = mysqli_fetch_array($result)){
if($row['Contrasena'] == $pass){
session_start();
$_SESSION['Matricula_alumno'] = $usuario;
header("Location:../alumnos/alumno.php");
}else{
header("Location:../alumnos/login_alumno.php");
exit();
}
}else{
header("Location:../alumnos/login_alumno.php");
exit();
}
?>