<?php 
 
 function Conectar()
 {
 $server= "localhost"; 
 $user="root";  
 $pass="";  
 $db="colegio";    

$conexion = new mysqli($server, $user, $pass, $db); 
   
     if($conexion->connect_error)
     {

        die("Error en la conexion: ".$conexion->connect_errno.
        ",".$conexion->connect_error);  
     }

     return $conexion;

}
?>
