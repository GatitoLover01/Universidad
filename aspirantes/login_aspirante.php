<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Aspirante</title>
  <meta name="viewport"
    content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="../css/estilo_login_alumno.css">
  <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">

</head>

<body>
  <form class="formulario" action="../validaciones/validar_aspirante.php" method="post">
    <div class="barra"></div>
    <div class="logo">
      <center><img src="../img/Logo.png" width="150px;" height="150px"></img></center>
    </div>
    <h1>Inicio de sesión</h1>
    <div class="contenedor">



      <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input type="text" placeholder="Matricula" name="matricula">

      </div>

      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="Contraseña" name="pass">

      </div>
      </br>
      <center>
        <a href="../index.html" type="submit" class="button">Cancelar</a>

        <input type="submit" value="Ingresar" class="button">
      </center>
    </div>
    <div class="barra"></div>
  </form>
</body>

</html>