<<<<<<< HEAD
<?php

require_once("Includes/auth.php");
/* VALIDACION */
if ($_POST){

 $array_errores=validacion();
 if(empty($array_errores)){
  header('Location: noticiascartas.html');
 }

}


/* REGISTRO  */

/* REDIRECCIONO */

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JugaYa-Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logov2.png" width="100" height="60" class="d-inline-block align-top" alt="logov2"></a>
        <div class="login-container">
          <ul>
            <li class="pr-2 pl-2"><a href="index.html" >Inicio</a></li>
            <li class="pr-2 pl-2"><a href="login.html">Entrar</a></li>
            <li class="pr-2 pl-2"><a href="registro.html" class="btn btn-success">Registrarme</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN HEADER -->

    <div class="signup-form">
      <form action="registro.php" method="post" enctype="multipart/form-data">
  		<h2>Registro</h2>
  		<p class="hint-text">Crea tu cuenta y forma parte de nuestra comunidad.</p>
      <div class="form-group">
  			<div class="row">
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="<?php if(isset($_POST["nombre"])){
              echo $_POST["nombre"];
            }
             ?>">
          </div>
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php if(isset($_POST["apellido"])){
              echo $_POST["apellido"];
            }
             ?>">
          </div>
  			</div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($_POST["usuario"])){
          echo $_POST["usuario"];
        }
         ?>">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST["email"])){
          echo $_POST["email"];
        }
         ?>">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña" required="required">
      </div>
      <div class="form-group">
        Subi una foto de perfil
        <input type="file" class="form-control" name="fotoperfil" placeholder="FotoDePerfil">
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Futbol">
            <label class="form-check-label" for="Futbol">
              Futbol
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Tenis">
            <label class="form-check-label" for="Tenis">
              Tenis
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Basquet">
            <label class="form-check-label" for="Basquet">
              Basquet
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Running">
            <label class="form-check-label" for="Running">
              Running
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Padel">
            <label class="form-check-label" for="Padel">
              Padel
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Yoga">
            <label class="form-check-label" for="Yoga">
              Yoga
            </label>
        </div>
  		</div>
  		<div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block">Registrate</button>

      </div>
      <?php

      if (!empty($array_errores)) {
        foreach ($array_errores as $key) {
          echo  $key . "<br>";
        }
      }
       ?>
      </form>
  	  <div class="text-center">¿Ya tenes una cuenta? <a href="login.html">Inicia Sesion!</a></div>
    </div>

  </body>
</html>
=======
<?php
include_once('Includes/auth.php');
$nombre="";
$apellido="";
$usuario="";
$email="";
$errores=[];
/* VALIDACION */
  /*Si el usuario esta logueado redirigir a noticiasCartas.php*/
  include_once('Logueado.php');
  if($_POST){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $usuario=$_POST["usuario"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"], PASSWORD_DEFAULT);
    $errores=validacion();
    if(empty($errores)){
      if (!empty($_POST["guardar_clave"])){
         setcookie("usuario", $usuario, time() + 365 * 24 * 60 * 60);
         setcookie("password", $password, time() + 365 * 24 * 60 * 60);
      }
      session_start();
      $_SESSION['usuario']=$usuario;
      $_SESSION['nombre']=$nombre;
      header('Location: noticiascartas.php');
    }
  }

/* REGISTRO  */

/* REDIRECCIONO */

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JugaYa-Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logov2.png" width="100" height="60" class="d-inline-block align-top" alt="logov2"></a>
        <div class="login-container">
          <ul>
            <li class="pr-2 pl-2"><a href="index.html" >Inicio</a></li>
            <li class="pr-2 pl-2"><a href="login.html">Entrar</a></li>
            <li class="pr-2 pl-2"><a href="registro.html" class="btn btn-success">Registrarme</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN HEADER -->

    <div class="signup-form">
      <form action="registro.php" method="post" enctype="multipart/form-data">
  		<h2>Registro</h2>
  		<p class="hint-text">Crea tu cuenta y forma parte de nuestra comunidad.</p>
      <div class="form-group">
  			<div class="row">
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre"  value="<?=$nombre?>">
          </div>
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=$apellido?>">
          </div>
  			</div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?=$usuario?>">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$email?>">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Contraseña">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Futbol">
            <label class="form-check-label" for="Futbol">
              Futbol
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Tenis">
            <label class="form-check-label" for="Tenis">
              Tenis
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Basquet">
            <label class="form-check-label" for="Basquet">
              Basquet
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Running">
            <label class="form-check-label" for="Running">
              Running
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Padel">
            <label class="form-check-label" for="Padel">
              Padel
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="Yoga">
            <label class="form-check-label" for="Yoga">
              Yoga
            </label>
        </div>
  		</div>
      <input type="file" name="foto_perfil" value="">
      <label><input type="checkbox" id="cbox1" name="guardar_clave" value="1" > Recordar Usuario</label>
  		<div class="form-group">
        <button type="submit" class="btn btn-success btn-lg btn-block">Registrate</button>
      </div>
      <?php
      if(!empty($errores)){
        foreach ($errores as $key) {
          echo "$key";
        }
      }
       ?>
      </form>
  	  <div class="text-center">¿Ya tenes una cuenta? <a href="login.html">Inicia Sesion!</a></div>
    </div>
  </body>
</html>
>>>>>>> 13b88074a0be6468672031a76a70bdea835c3139
