<?php

$matricula=$_POST['matricula'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['matricula']=$matricula;

include('conexion.php');

$consulta="SELECT*FROM alumnos where Matricula_alumno='$matricula' and Contrasena='$contraseña' ";
$resultado=mysql_query($conexion, $consulta);

$filas=mysql_num_rows($resultado);

if($filas){
  header("location : alumno.html");
}else{
  ?>
  <?php
  include("login_alumno.html");
  ?>
  <h1 class="bad" >ERROR EN LA AUTENTIFICACIÓN</h1>
  <?php
}
mysql_free_result($resultado);
mysql_close($conexion);