<html>
   <head>
     <link rel="icon" type="image/png" href="../logo.png">
      <meta charset="utf-8">
   	  <title>EEST N°3</title>
       <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
   	  <link rel="stylesheet" type="text/css" href="newphp.css">
       <link rel="stylesheet" href="../css/bootstrap.min.css">  
    </head>

   <body>

     <?php 
session_start();
if(!isset($_SESSION["usuario"])){
header("Location:login/login.php");
}
 ?>

     <a href="indexa.php">
     <div class="ttl">
        <img class="logo" src="../icos/logo.png"></img>
          <span class="tlo">E.E.S.T. N°3</span>
     </div></a>

      <center>
      <div class="col-sm-4" style="height:350px; background: white; margin-top: 40px; margin-bottom: 100px; border: #141414 3px solid;">
        <br><br>
        <h1 class="ndh">¡Noticia Borrada!</h1>
        <br><br><br><br><br><br><br><br>

<?php

Require_once("../conexion.php");
$conexion = Conectar();

$code = $_POST['code'];

mysqli_query($conexion, "DELETE FROM noticias where id_noticia='$code'") or die ("Error al intentar borrar");

$e=mysqli_error($conexion);
?>
<form method="get" action="indexa.php"><button type="submit" class="btn btn-primary">Volver a Inicio</button></form>
      </div>
</center>
<div class="foot">
  <br><br><br><br>
  <center>
  <div class="fut">
  Contacto: Tel (0223) 495-0285 - Sede: 14 de Julio 2550 - MDQ
  </div>
  <br>
    <a href="https://www.fb.com/EESTSarmiento/"><img class="rs" src="../icos/fb.png"></a>
    <a href="https://www.instagram.com"><img  class="rs" src="../icos/ig.png"></a>
    <a href="https://www.twitter.com"><img  class="rs" src="../icos/tw.png"></a>
    <a href="https://www.youtube.com"><img  class="rs" src="../icos/yt.png"></a>
  </center>
</div>

   </body>
</html>
