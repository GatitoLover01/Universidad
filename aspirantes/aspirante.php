<?php
require('../conexion/conexion.php');
/*
$servername = "remotemysql.com";
$database = "FgQKdPudUJ";
$username = "FgQKdPudUJ";
$password = "ew5EoQKp3s";
// Create connection
$conexion = mysqli_connect($servername, $username, $password, $database);*/

$sqlCarreras= "SELECT Id_Carrera, Nombre FROM carreras";
$dataCarrerasSelect = mysqli_query($conexion, $sqlCarreras);
?>
<html>

<head>
  <title>Aspirante</title>
  <link rel="stylesheet" href="../css/estilo.css">
  <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
</head>

<body>
  <header>
    <div class="header">
      <div class="logo"><img src="../img/Logo.png" width="150px" height="150px"></img></div>
      <center>
        <div id="universidad"><a>Universidad Francisco</a></div>
      </center>
    </div>
    <div class="banner"></div>
    <div class="menu">
      <a href="login_aspirante.php">Iniciar sesión</a>
      <a href="../index.html">Regresar</a>
    </div>
  </header>

  <div class="inscripcion">

    <h1>Bienvenidos Aspirantes</h1></br>
    <center>
      <div class="datos_inscripcion"></br>
        <h3>Registro de inscripción.</h3>
        </br>


        <form action="guardar_docs.php" method="POST" enctype="multipart/form-data">
          <table width='600'>
            <tr style="height:50px">
              <th align=left>Nombre (s):</th>
              <th align=left><input type="text" name="Nombre" id="Nombre"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Apellido paterno:</th>
              <th align=left><input type="text" name="Apellido_paterno" id="Apellido_paterno"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Apellido materno:</th>
              <th align=left><input type="text" name="Apellido_materno" id="Apellido_materno"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Digitar CURP:</th>
              <th align=left><input type="text" name="CurpS" id="CurpS"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>CURP:</th>
              <th align=left><input type="file" name="CurpD" id="CurpD"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Acta de nacimiento:</th>
              <th align=left><input type="file" name="Acta_nac" id="Acta_nac"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Cita:</th>
              <th align=left><input type="file" name="Cita" id="Cita"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Certificado de preparatoria:</th>
              <th align=left><input type="file" name="Certificado" id="Certificado"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Carrera:</th>
              <th align=left><input type="text" name="Carrera" id="Carrera" placeholder="Ingrese el id de la carrera"></th>
              <th align=left>
            <select name="nombre" class="form-control form-control-sm">
                    <option value="">Seleccione la carrera</option>
                    <?php
                      while ($dataSelect = mysqli_fetch_array($dataCarrerasSelect)) { ?>
                        <option>
                          <?php 
                          echo utf8_encode($dataSelect["Id_Carrera"]);
                          echo utf8_encode(".-");
                          echo utf8_encode($dataSelect["Nombre"]); 
                          
                          ?>
                        </option>
                    <?php 

                  } ?>
                  </select>
              </th>
            </tr>
            <tr style="height:50px">
              <th align=left>Año de solicitud</th>
              <th align=left><input type="text" name="yearS" id="yearS"></th>
            </tr>
            <tr style="height:50px">
              <th align=left>Genero:</th>
              <th align=left><input type="text" name="genero" id="genero"></th>
            </tr>
          </table></br>
          <button type="submit">Enviar datos </button>
      </div>
      </form>

  </div>

  </center>
  </br></br>

  <footer class="contenedor-footer">
    <div class="content-foo">
      <h4>Telefono</h4>
      <p>+01 9966332211</p>
    </div>
    <div class="content-foo">
      <h4>Correo</h4>
      <p>UnoInventado@gmail.com</p>
    </div>
    <div class="content-foo">
      <h4>Ubicación</h4>
      <p>DACyTI-UJAT Unidad Chontalpa</p>
    </div>
    <h2 class="titulo-final">&copy; Equipo No. 2 | Admn. Base de Datos</h2>
  </footer>
</body>

</html>