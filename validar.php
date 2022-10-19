<?php
include('conexion.php');
$matricula=$_POST['matricula'];
$password=$_POST['password'];

$consulta="SELECT*FROM alumnos where alumnos='$matricula' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:alumno.html");

}else{
    ?>
    <?php
    include("login_alumno.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);