<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

try{



    $base=New PDO ("mysql:host=localhost; dbname=colegio"  , "root",  "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuarios WHERE nombre= :login AND clave= :password";

    $resultado=$base-> prepare ($sql);

    $login=htmlentities(addslashes($_POST["login"]));

    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login", $login);

    $resultado->bindValue(":password", $password);

    $resultado->execute (); 

    $numero_registro=$resultado->rowCount();

    if($numero_registro!=0) {

//echo "<h2>Adelante!!</h2>";

session_start();

$_SESSION["usuario"]=$_POST["login"];



header("location:../indexa.php");
    }else{

header("location:login.php");
    }
} 

catch(exception $e) { 

	die("Error: "  . $e->getMessage ());






}









 ?>






</body>
</html>