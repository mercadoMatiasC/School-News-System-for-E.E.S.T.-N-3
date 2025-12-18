<html>
   <head>
     <link rel="icon" type="image/png" href="../icos/logo.png">
      <meta charset="utf-8">
       <title>E.E.S.T. N°3</title>
       <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
       <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="indexa.css">
        <script src="../js/all.min.js"></script>
       </head>

   <body>
     <div class="ttl">
        <img class="logo" src="../icos/logo.png"></img>
          <span class="tlo">E.E.S.T. N°3</span>

     </div>

     <?php 
session_start();
if(!isset($_SESSION["usuario"])){
header("Location:login/login.php");
}
 ?>

        <div id="header">

          <nav>
           <div class="toggle">
              <i class="fa fa-bars menu" aria-hidden="true"></i>
           </div> 
                                                             <center>
      		 <ul>
<a href="faqs.html">
            <i id="icon" class="fa fa-question-circle" style="color: white;"></i>
            </a>
             <li><a href="us.html">Nosotros</a></li>
             <li><a href="mu.html">Material Alumnos</a></li>
             <li><a href="inst.html">Institucional</a></li>
             <li><a href="prog.php">Programas</a></li>
             <a href="login/cierre.php"><i class="fas fa-sign-out-alt"></i></a>

             </ul>
                                                            </center>
      		 </nav>
         </div>
        </div>



  <div class="lft">
    <center>
      <div class="time1">       
        <script> 
            var mydate=new Date(); 
            var year=mydate.getYear(); 
            if (year < 1000) 
            year+=1900; 
            var day=mydate.getDay(); 
            var month=mydate.getMonth()+1; 
            if (month<10) 
            month="0"+month; 
            var daym=mydate.getDate(); 
            if (daym<10) 
            daym="0"+daym; 
            document.write("<medium><font color=white face='Times New Roman'><b>"+daym+"/"+month+"/"+year+"</b></font></small>") 
            </script> 
        </div>
        </center>
    <br>

     <div class="nt"><h2>Noticias</h2>
      <h3><a href="newphp.php" style="float: right; margin-top:-30px; margin-left:5px;"><button class="btn btn-primary" style="height:35px;">Nueva</button></a></h3>
      <h3><a href="edit.php" style="float: right; margin-top:-30px;"><button class="btn btn-primary" style="height:35px;">Editar</button></a></h3>
     </div>
  <?php include ('../conexion.php');
    
    $consulta = "select * from noticias order by created_at desc limit 3";
    $conexion = Conectar();
    $respuesta = mysqli_query($conexion, $consulta);

   
    foreach($respuesta as $item)
    {
      echo '<div class="notu" style="background: lightgray;
                              text-transform: capitalize;
                              border-radius: 2px; 
                              color:black;
                              padding:5px;
                              border: #052047 3px solid;
                              margin-bottom: 12px;"><h3>'.$item['titulo'].
                              '</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$item['id_noticia'].'<hr style="background: black;"><h6>'.$item['created_at'].
                              '</h6>'.$item['noticia'].'<br></div>';       
    }?>

      <center>
        <br>
        <br>
     
     <div class="nt"><h3>Especialidades</h3></div>
    <center>
    <div class="cen">
Ciclo Básico<br>
        <a href="cb.html"><img class="ic" src="../icos/CB.png"></a><br>
           &nbsp;&nbsp;&nbsp;Informática&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Electrónica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Electromecánica<br>
        <a href="espe/inf.html"><img class="ic" src="../imgs/special/inf.png"></a>
        <a href="espe/ele.html"><img class="ic" src="../imgs/special/ele.png"></a>
        <a href="espe/elm.html"><img class="ic" src="../imgs/special/elm.png"></a>
           <br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automotores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quimica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Construcciones
           <br>
        <a href="espe/mec.html"><img class="ic" src="../imgs/special/mec.png"></a>
        <a href="espe/qui.html"><img class="ic" src="../imgs/special/qui.png"></a>
        <a href="espe/co.html"><img class="ic" src="../imgs/special/co.png"></a>
    </div>
  </center>
</div>

  

<a href="#up" class="simplescrollup__button simplescrollup__button--hide"><img src="../icos/upar.png" width="47"></a>

<div class="rght">
<?php 
echo "<h4>Hola:  "  .  $_SESSION["usuario"].'</h4>';
 ?>
 <div class="time">
   <center>
    <script> 
    var mydate=new Date(); 
    var year=mydate.getYear(); 
    if (year < 1000) 
    year+=1900; 
    var day=mydate.getDay(); 
    var month=mydate.getMonth()+1; 
    if (month<10) 
    month="0"+month; 
    var daym=mydate.getDate(); 
    if (daym<10) 
    daym="0"+daym; 
    document.write("<medium><font color=white face='Times New Roman'><b>"+daym+"/"+month+"/"+year+"</b></font></small>") 
    </script> 
   </center>
  </div>

  <br>

  <h4>Links Útiles</h4>
  <hr>
  <a href="http://abc.gov.ar" target="_blank"> ABC</a><br>
  <a href="http://www.or0430000.escuelas.gov.ar" target="_blank"> Consejo escolar </a><br>
  <a href="https://www.argentina.gob.ar/educacion" target="_blank"> Ministerio nacional de educación </a><br>
  <a href="http://www.sadmardelplata.com.ar" target="_blank"> SAD Mar del Plata</a><br>
  <h4>Interés General</h4>
  <hr>
  <h4>Enlaces Rápidos</h4>
  <hr>
 </div>

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
<span style="line-height:65px; font-size: 11;">&nbsp; Desarrollado por Matias Mercado, Nicolás Solis y Franco Cisnero.</span>
      </div>

      <script src="../js/simplescrollup.js"></script>
      <script src="../js/jquery.js"></script>

      <script type="text/javascript">
        $(document).ready(function(){
          $('.menu').click(function(){
            $('ul').toggleClass('active')
          })
        }) 
      </script>
      <script src="../js/bootstrap.min.js"></script>
      </body>
</html>
