<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="icon" type="image/png" href="../../logo.png">
  <title>E.E.S.T N3</title>
<link rel="stylesheet" href="login.css">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">

</head>
<body>

<?php
 
 session_start();
 
 session_destroy();
 
?>

<form action="comprueba_login.php" method="post">

 <div class="login-box">
      <a href="../../index.php"><img src="../../logo.png" class="avatar" alt="Avatar Image"></a>
 <h1>Iniciar sesión</h1>

<form>
 
<label for="Usuario">Usuario</label>  
<input type="text" name="login" placeholder="Usuario" required>
          
<label for="Contraseña">Contraseña:</label>  
<input type="password" name="password" placeholder="Contraseña" required>

<input type="submit" name="enviar" value="Entrar">

</form>

</div>
</body>
</html>
