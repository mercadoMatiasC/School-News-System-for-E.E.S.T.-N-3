<html>
   <head>
     <link rel="icon" type="image/png" href="icos/logo.png">
      <meta charset="utf-8">
       <title>E.E.S.T. N°3</title>
       <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
       <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="js/all.min.js"></script>
       </head>

   <body>
     <div class="flut">
     <div class="ttl">
        <img class="logo" src="icos/logo.png"></img>
          <span class="tlo">E.E.S.T. N°3</span>
     </div>

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
            <li><a href="inst.html">Institucional</a></li>
            <li><a href="mu.html">Material Alumnos</a></li>
             <li><a href="prog.php">Programas</a></li>
             <a href="admin/login/login.php">
             <i id="icon" class="fa fa-lg fa-fw fa-user" style="color: white;"></i>
             </a>
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
    <br><center>

     <div class="nt">Noticias</div>
      </center>
       
     <?php include ('conexion.php');
    
    $consulta = "select * from noticias order by created_at desc limit 5";
    $conexion = Conectar();
    $respuesta = mysqli_query($conexion, $consulta);


?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
   <?php
    $i = 0;
    foreach($respuesta as $item)
    {
      if($i == 0){
      echo '<div class="item active" style="background-image: url(bg1.png);
                              background-size: cover;
                              text-transform: capitalize;
                              padding:5px;
                              height:300px;
			      color:white;
			      @font-face {
                              font-family: Moon;
                              src: url(fonts/MoonL.otf);}                        
margin-bottom: 0px;"><center style="background-color: rgb(0,0,0,0.3);">
                              <h1>'.$item['titulo'].
                              '</h1><h6>'.$item['created_at'].
                              '</h6><h4>'.$item['noticia'].'</h4></div>';
			 
      }else{
      echo '<div class="item" style="background-image: url(bg1.png);
                              background-size: cover;
                              text-transform: capitalize;
                              padding:5px;
                              height:300px;
			      color:white;
			      @font-face {
                              font-family: Moon;
                              src: url(fonts/MoonL.otf);}                        
                              margin-bottom: 0px;">
                              <center style="background-color: rgb(0,0,0,0.3);">
                              <h1>'.$item['titulo'].
                              '</h1><h6>'.$item['created_at'].
                              '</h6><h4>'.$item['noticia'].'</h4></div>';
        
      }$i++;
    }?>
    </div>
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
      <center>
        <br>
        <br>
     
     <div class="nt">Especialidades</div>
    
     <div class="cen">
Ciclo Básico<br>
        <a href="cb.html"><img class="ic" src="icos/CB.png"></a><br>
           &nbsp;&nbsp;&nbsp;Informática&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Electrónica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Electromecánica<br>
        <a href="espe/inf.html"><img class="ic" src="imgs/special/inf.png"></a>
        <a href="espe/ele.html"><img class="ic" src="imgs/special/ele.png"></a>
        <a href="espe/elm.html"><img class="ic" src="imgs/special/elm.png"></a>
           <br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automotores&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quimica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Construcciones
           <br>
        <a href="espe/mec.html"><img class="ic" src="imgs/special/mec.png"></a>
        <a href="espe/qui.html"><img class="ic" src="imgs/special/qui.png"></a>
        <a href="espe/co.html"><img class="ic" src="imgs/special/co.png"></a>
    </div>

  </center>
</div>

  

<a href="#up" class="simplescrollup__button simplescrollup__button--hide"><img src="icos/upar.png" width="47"></a>

<div class="rght">
<center><h4 style:"padding-bottom: 20px;";>¡Sesión Cerrada!</h4></center>
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
          <a href="https://www.fb.com/EESTSarmiento/"><img class="rs" src="icos/fb.png"></a>
          <a href="https://www.instagram.com"><img  class="rs" src="icos/ig.png"></a>
          <a href="https://www.twitter.com"><img  class="rs" src="icos/tw.png"></a>
          <a href="https://www.youtube.com"><img  class="rs" src="icos/yt.png"></a>
        </center>
<span style="line-height:65px; font-size: 11;">&nbsp; Desarrollado por Matias Mercado, Nicolás Solis y Franco Cisnero.</span>
      </div>

      <script src="js/simplescrollup.js"></script>
      <script src="js/jquery.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.menu').click(function(){
            $('ul').toggleClass('active')
          })
        }) 
      </script>
      <script src="js/bootstrap.min.js"></script>
      </body>
</html>