<?php
 ?>
<!DOCTYPE html>
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

    <!-- HEADER -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logov2.png" width="100" height="60" class="d-inline-block align-top" alt="logov2"></a>
        <div class="login-container">
          <ul>
            <li class="pr-2 pl-2"><a href="index.php"  class="btn btn-success" >Inicio</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN HEADER -->

<div class="padding principal">
 <div class="container">
 <div class="d-flex flex-row">
     <!--BARRA NAVEGACION DEL COSTADO -->
     <div id="list-example" class="list-group col-2">
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
     <!-- CONTAINER PARA LA LISTA -->

     <div class="container d-flex flex-column col-10">
        <!--PRIMER ELEMENTO DE LA LISTA -->

        <div class="d-flex flex-row listaEvento">
          <div class="d-flex flex-column col-4">
          <img src="img/cancha2.jpg" alt="" style="height:200px">
          </div>
          <div class="d-flex flex-column col-3">
            <h5 class="card-title nombre-apellido-amigo">4 lugares libres</h5>
              <p class="nombre-usuario-amigo"> <a href="#">Complejo El Galpon</a></p>
              <p class=""><small class="text-muted amigos-en-comun"><a href="#"><i class="fas fa-location-arrow"></i>1.6km de distancia</a></p></small></p>
          </div>
          <div class="d-flex flex-column col-3">
          <p class="nombre-usuario-amigo" $140 por persona</p>
          <a href="#" class="btn btn-primary">Unite!</a>
        </div>
        </div>
        <!-- TERMINA EL PRIMER ELEMENTO DE LA LISTA -->
        <div class="d-flex flex-row listaEvento">
          <div class="d-flex flex-column col-4">
          <img src="img/cancha1.jpg" alt="" style="height:200px">
          </div>
          <div class="d-flex flex-column col-3">
            <h5 class="card-title nombre-apellido-amigo">6 lugares libres</h5>
              <p class="nombre-usuario-amigo"> <a href="#">Complejo El Desafio</a></p>
              <p class=""><small class="text-muted amigos-en-comun"><a href="#"><i class="fas fa-location-arrow"></i>2.4km de distancia</a></p></small></p>
          </div>
          <div class="d-flex flex-column col-3">
          <p class="nombre-usuario-amigo"> $130 por persona</p>
          <a href="#" class="btn btn-primary">Unite!</a>
          </div>
        </div>
        <div class="d-flex flex-row listaEvento">
          <div class="d-flex flex-column col-4">
          <img src="img/cancha 3.jpg" alt="" style="height:200px">
          </div>
          <div class="d-flex flex-column col-3">
            <h5 class="card-title nombre-apellido-amigo">8 lugares libres</h5>
              <p class="nombre-usuario-amigo"> <a href="#">Complejo El Diego</a></p>
              <p class=""><small class="text-muted amigos-en-comun"><a href="#"><i class="fas fa-location-arrow"></i>550 mts de distancia</a></p></small></p>
          </div>
          <div class="d-flex flex-column col-3">
          <p class="nombre-usuario-amigo"> $150 por persona</p>
          <a href="#" class="btn btn-primary">Unite!</a>
          </div>
        </div>
    <h2>Complejos disponibles para tu evento: </h2>
     <div class="d-flex flex-row listaEvento">
       <div class="d-flex flex-column col-4">
       <img src="img/cancha1.jpg" alt="" style="height:200px">
       </div>
       <div class="d-flex flex-column col-3">
           <h3 class="nombre-usuario-amigo"> <a href="#">El Desafio</a></h3>
           <p class=""><small class="text-muted amigos-en-comun"><a href="#"><i class="fas fa-location-arrow"></i>2.4km de distancia</a></p></small></p>
       </div>
       <div class="d-flex flex-column col-3">
       <p class="nombre-usuario-amigo"> $130 por persona</p>
       <a href="#" class="btn btn-primary">Reserva!</a>
       </div>
     </div>
     <div class="d-flex flex-row listaEvento">
       <div class="d-flex flex-column col-4">
       <img src="img/cancha1.jpg" alt="" style="height:200px">
       </div>
       <div class="d-flex flex-column col-3">

           <h3 class="nombre-usuario-amigo"> <a href="#">El Desafio</a></h3>
           <p class=""><small class="text-muted amigos-en-comun"><a href="#"><i class="fas fa-location-arrow"></i>2.4km de distancia</a></p></small></p>
       </div>
       <div class="d-flex flex-column col-3">
       <p class="nombre-usuario-amigo"> $130 por persona</p>
       <a href="#" class="btn btn-primary">Unite!</a>
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
          <a href="noticiascartas.php">Volver a Inicio</a>
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
<div>Icons made by <a href="https://www.flaticon.com/authors/ddara" title="dDara">dDara</a> from <a href="https://www.flaticon.com/"         title="Flaticon">www.flaticon.com</a></div>
<div>Icons made by <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/"             title="Flaticon">www.flaticon.com</a></div>
  </body>
</html>
<?php
 ?>
