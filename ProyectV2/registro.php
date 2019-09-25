<?php
$nombre="";
$apellido="";
$usuario="";
$email="";
/* VALIDACION */
if ($_POST){
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["usuario"];
$email=$_POST["email"];
  if(strlen($_POST["nombre"])==0){
    echo "Debes rellenar el campo";
  }
  elseif(strlen($_POST["apellido"])==0){
    echo "Debes rellenar el campo";
  }
 elseif(strlen($_POST["usuario"])<=2){
    echo "El usuario debe tener al menor 4 caracteres";
  }

  elseif(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false){
    echo "Debes ingresar un mail correcto";
  }
  else{header("Location:noticiascartas.html");exit;
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
      <form action="registro.php" method="post">
  		<h2>Registro</h2>
  		<p class="hint-text">Crea tu cuenta y forma parte de nuestra comunidad.</p>
      <div class="form-group">
  			<div class="row">
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="required" value="<?=$nombre?>">
          </div>
  				<div class="col-xs-6">
            <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="required">
          </div>
  			</div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
      </div>
  		<div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña" required="required">
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
      </form>
  	  <div class="text-center">¿Ya tenes una cuenta? <a href="login.html">Inicia Sesion!</a></div>
    </div>
  </body>
</html>
