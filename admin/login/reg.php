<html>
   <head>
     <link rel="icon" type="image/png" href="../../logo.png">
      <meta charset="utf-8">
       <title>EEST N°3</title>
       <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="login.css">
       <link rel="stylesheet" href="../../css/bootstrap.min.css">  
    </head>

      <center>
      <div class="col-sm-4" style="height:410px; background: darkgrey; margin-top: 180px; margin-bottom: 100px; border: #141414 3px solid;">
        <br><br>
        <h1 class="ndh">¡Admin Registrado!</h1>
        <br><br>

<?php

Require_once("../../conexion.php");
$conexion = Conectar();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];

$inserta = "INSERT INTO usuarios (nombre, apellido, clave, rol)
 VALUES ('$nombre', '$apellido', '$clave', '$rol');";

$resultado = mysqli_query($conexion, $inserta);
$e=mysqli_error($conexion);

 echo "<b>Nombre:</b> ".$nombre.". <br><br>
       <b>Apellido:</b> ".$apellido.". <br><br>
       <b>Rol:</b> ".$rol.". <br><br>
       <br><br>"
?>
<form method="get" action="login.php"><button type="submit" class="btn btn-primary">Ingresar</form>
      </div>
   </body>
</html>
