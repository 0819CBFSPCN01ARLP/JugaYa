<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
  }
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logov2.png" width="100" height="60" class="d-inline-block align-top" alt="logov2"></a>
        <div class="login-container">
          <ul>
            <li class="pr-2 pl-2"><a href="noticiascartas.php" class="btn btn-success" >Inicio</a></li>
            <li class="pr-2 pl-2"><a href="perfil.php" class="btn btn-success">Perfil</a></li>
            <li class="pr-2 pl-2"><a href="logout.php" class="btn btn-success">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div class="padding principal">
 <div class="container">
  <div class="d-flex flex-row">
     <div id="list-example" class="list-group col-sm-2">
     <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-1"><i class="fas fa-futbol"></i>Mis proximos eventos</a>
     <br>
     <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-2"><b>Mis equipos</b></a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-futbol"></i> Boca</a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-futbol"></i>Los 5 fantasticos</a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-running"></i>Runners LP</a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-table-tennis"></i> Nadal y Roger</a>
     <br>
     <br>
     <a class="list-group-item list-group-item-action" id="linksnavlateral" href="#list-item-2"><b>Explorar</b></a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-futbol"></i> Eventos cercanos</a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-4"><i class="fas fa-user-friends"></i>Jugadores cercanos</a>
     <a class="list-group-item list-group-item-action " id="linksnavlateral" href="#list-item-3"><i class="fas fa-running"></i>Deportes</a>

     </div>

    <div class="container principal d-flex flex-row col-md-10">
    <!--Columna para la foto y abajo los deportes que practica el usuario -->
      <div class="d-flex flex-column col-md-4">
        <!-- FOTO PERFIL -->
        <img  class="fotoPerfil" src="<?php echo "img/".$perfilFoto; ?>" alt="">
        <h3> <?php echo $_SESSION['usuario']; ?></h3>
        <ul class="ListaDeportesUsuario">
    <!--DEPORTES -->
        <li> <a href="#">Futbol 5</a></li>
        <li> <a href="#">Futbol 11</a></li>
        <li> <a href="#">Tenis</a></li>
        <li> <a href="#">Running</a></li>
        <li> <a href="#">Paddel</a></li>
        <li> <a href="#">Fifa PS4</a></li>
        </ul>
      </div>
    <!--Container para el nav con las Pestañas de estadisticas, fotos, etc -->
    <div class="d-flex container  flex-column">
      <ul class="nav nav-tabs nav-justified ">
        <li class="nav-item">
          <a class="nav-link active" href="#">Estaditicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fotos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Información personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ultimos eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Puntuaciones</a>
        </li>
        </ul>
     <!-- Este Container tendria que cambiar de acuerdo a la pestaña seleccionada -->
          <div class="container containerEstadisticas">
            <p class="estadisticasPerfil"><b>Partidos jugados:</b> 20</p>
            <p class="estadisticasPerfil"><b>Partidos ganados:</b> 15</p>
            <p class="estadisticasPerfil"><b>Partidos empatados:</b> 3</p>
            <p class="estadisticasPerfil"><b>Partidos perdidos:</b> 2</p>
            </div>
     <!-- Container para las puntuaciones -->
            <div class="container containerEstadisticas puntuaciones d-flex flex-row">
            <div class="container nivel">
              <p>Nivel</p>
              <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
            </div>
            <div class="container nivel">
              <p>Compromiso</p>
              <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
            </div>
            <div class="container nivel">
              <p>Respeto</p>
              <p><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
            </div>

            </div>
    </div>
    </div>
</div>
</div>
</div>
<footer class="page-footer font-small pt-4">
<!-- Footer Links -->
<div class="container text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-4 mx-auto">
      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacto</h5>
      <form>
        <fieldset class="form-group">
          <input type="email" class="form-control" id="InputEmail1" placeholder="Email">
        </fieldset>
        <fieldset class="form-group">
          <textarea class="form-control" id="Message" placeholder="Mensaje"></textarea>
        </fieldset>
        <fieldset class="form-group text-xs-right">
          <button type="button" class="btn btn-secondary-outline btn-dark">Enviar</button>
        </fieldset>
      </form>
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-2 mx-auto">
      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">FAQ</h5>
      <ul class="list-unstyled">
        <li>
          <a href="FAQ.php#sobreJugaYa">Sobre JugaYa</a>
        </li>
        <li>
          <a href="FAQ.php#crearEvento">¿Como creo un evento?</a>
        </li>
        <li>
          <a href="FAQ.php#empresa">Perfil de Empresa</a>
        </li>
        <br>
        <li>
          <a href="FAQ.php">Mas preguntas</a>
        </li>
      </ul>
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <!-- Grid column -->
    <div class="col-md-2 mx-auto">
      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">General</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#">Valores</a>
        </li>
        <li>
          <a href="#">Privacidad</a>
        </li>
        <li>
          <a href="#">Desarrolladores</a>
        </li>
        <br>
        <li>
          <a href="index.php">Volver a Inicio</a>
        </li>
      </ul>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<hr>
<!-- Call to action -->

<!-- Call to action -->

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a href="https://www.facebook.com"class="btn-floating btn-fb mx-1">
      <i class="fab fa-facebook-f"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="https://www.twitter.com" class="btn-floating btn-tw mx-1">
      <i class="fab fa-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="https://www.google.com"class="btn-floating btn-gplus mx-1">
      <i class="fab fa-google-plus-g"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="https://www.Instagram.com"class="btn-floating btn-li mx-1">
      <i class="fab fa-instagram"> </i>
    </a>
  </li>
</ul>
<!-- Social buttons -->
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="index.php"> JugaYa.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
  </body>
</html>
