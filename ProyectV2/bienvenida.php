<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
  }
  elseif ($_SESSION['previoLogueo']==true) {
    header('Location: noticiasCartas.php');
    die();
  }

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JugaYa- Bienvenido!</title>
    <link rel="stylesheet" href="css/bienvenida.css">
  </head>
  <body>
    <div class="jumbotron banner text-center">
      <h1><?php echo "Bienvenido ".$_SESSION['usuario']."!"; ?></h1>
      <p>Sera redirigido en <span id="countdown">3</span></p>
    </div>

    <script type="text/javascript">
      var timeleft = 3;
      var downloadTimer = setInterval(function(){
      timeleft--;
      document.getElementById("countdown").textContent = timeleft;
      if(timeleft <=0 ){
          clearInterval(downloadTimer);
          window.location = "noticiascartas.php";
      }
      },1000);
    </script>

  </body>
</html>
