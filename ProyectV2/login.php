<?php

session_start();
include_once('Logueado.php');
include_once('Includes/auth.php');
require_once('db/DB.php');

$errores=[];
if (isset($_POST['email'])) {
  $email=$_POST['email'];
  $errores=verificaLogin($errores,$db);
}
else {
  $email='';
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JugaYa - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <!-- HEADER -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logov2.png" width="100" height="60" class="d-inline-block align-top" alt="logov2"></a>
        <div class="login-container">
          <ul>
            <li class="pr-2 pl-2"><a href="index.php" >Inicio</a></li>
            <li class="pr-2 pl-2"><a href="login.php">Entrar</a></li>
            <li class="pr-2 pl-2"><a href="registro.php" class="btn btn-success">Registrarme</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN HEADER -->
    <div class="signup-form">
      <form action="login.php" method="post">
    		<h2>Login</h2>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}else {echo $email;} ?>">
        </div>
    		<div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
        </div>
          <label><input type="checkbox" id="cbox1" name="guardar_clave" > Recordar Usuario</label>
    		<div class="form-group">
          <button type="submit" class="btn btn-success btn-lg btn-block">Inicia Sesion</button>
        </div>
        <?php
        if(!empty($errores)){
          foreach ($errores as $key) {
            echo "$key <br>";
          }
        }
         ?>
      </form>
  	  <div class="text-center">¿No tenes una cuenta? <a href="registro.php">Registrate!</a></div>
    </div>
  </body>
</html>
