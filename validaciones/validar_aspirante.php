<?php
require('../conexion/conexion.php');
$usuario = $_POST['matricula'];
$pass = $_POST['pass'];
if(empty($usuario) || empty($pass)){
header("Location:../aspirantes/login_aspirante.php");
exit();
}

$result = mysqli_query($conexion, "SELECT * FROM inscripciones WHERE CurpString = '". $usuario ."'");
if($row = mysqli_fetch_array($result)){
if($row['CurpString'] == $pass){
session_start();
$_SESSION['CurpString'] = $usuario;
header("Location:../aspirantes/aspirante.php");
}else{
header("Location:../aspirantes/login_aspirante.php");
exit();
}
}else{
header("Location:../aspirantes/login_aspirante.php");
exit();
}
?>