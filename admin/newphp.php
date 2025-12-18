<html>
   <head>
     <link rel="icon" type="image/png" href="../logo.png">
      <meta charset="utf-8">
       <title>E.E.S.T. N°3</title>
       <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
   	  <link rel="stylesheet" type="text/css" href="newphp.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   </head>

   <body>

     <?php 
session_start();
if(!isset($_SESSION["usuario"])){
header("Location:login/login.php");
}
 ?>

     <a href="indexa.php"><div class="ttl">
        <img class="logo" src="../icos/logo.png"></img>
          <span class="tlo">E.E.S.T. N°3</span>
     </div></a>
<div class="container-fluid">
      <div class="row" style="margin-top: 40px;">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style ="padding:20px; background-color:white; border-radius:5px;">
       
          <h1 class="ndh">Nueva Noticia</h1>
            <form action="new.php" method="POST" enctype="multipart/form-data">
               
                 <div class="form-group">
                    <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" style="text-transform: capitalize;" name="titulo" required> 
                 </div>
                 <div class="form-group">
                    <label for="noticia">Noticia:</label>
                    <textarea placeholder="Descripción" rows="7" size="50" name="noticia" class="form-control" required></textarea>
                 </div>
                 <div class="formgroup">
                  <label for="imagen">Imagen:</label>
                  <input type="file" name="foto" size="20" class="form-control-file" style="margin-bottom: 20px;">
                 </div> <center>
                <button type="reset" class="btn btn-danger">Restaurar</button>
                <button type="submit" class="btn btn-primary">Subir</button>
                        </center>
            </form>
            <div class="col-sm-3"></div>
        </div>
      </div>
</div><!--Cierra el div container-fluid-->

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
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
