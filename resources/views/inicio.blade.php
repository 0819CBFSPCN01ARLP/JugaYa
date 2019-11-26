@extends('layouts\master_template')

@section('links')
  <link rel="stylesheet" href="css/main.css">
@endsection

@section('section')
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
<!--CONTAINER PARA LAS CARTAS CON NOTICIAS-->
    <div class="container principal col-md-10">
    <div class="d-flex flex-row flex-wrap">
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/festjogol.jpg" class="card-img-top" alt="festejogol">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Se jugó la cuarta fecha del <a href="#"> Torneo SuperLiga 2020</a></p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/messi.jpg" class="card-img-top" alt="Amigo">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Tu amigo <a href="#">Lionel messi</a> se unió al equipo Barcelona</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"> <img src="img/Grupo.png" alt=""class="categorias">Barcelona </a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/equipomanchester.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <p class="card-text"> El <a href="#"> Manchester United </a> esta en busqueda de un laterak derecho</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"> <img src="img/periodico.png" alt="" class="categorias">Equipos disponibles</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/complejotenis.jpg" class="card-img-top" alt="..." class="categorias">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Ultimos lugares en el torneo <a href="#">Copa Red Bull LP</a></p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/estadiolol.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text"><a href="#">javierbaez</a>, <a href="#">mariangomez94</a> y <a href="#">jimealvarez</a> jugaran en WORLD LOL CHALLANGE 2020</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/zumba.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Clase de <a href="#">funcionalLP</a>hoy a las 21 hs.</p>
          <div class="contenedorCategorias"><a href="#" class="card-link"> <img src="img/ejercicios-de-estiramiento.png" alt=""> Clases disponibiles</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/festjogol.jpg" class="card-img-top" alt="festejogol">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Se jugó la cuarta fecha del <a href="#"> Torneo SuperLiga 2020</a></p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/messi.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1 ">
          <h5 class="card-title"></h5>
          <p class="card-text">Tu amigo <a href="#">Lionel messi</a> se unió al equipo Barcelona</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"> <img src="img/Grupo.png" alt=""class="categorias">Barcelona </a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/equipomanchester.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <p class="card-text"> El <a href="#"> Manchester United </a> esta en busqueda de un lateral derecho</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"> <img src="img/periodico.png" alt="" class="categorias">Equipos disponibles</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/complejotenis.jpg" class="card-img-top" alt="..." class="categorias">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Ultimos lugares en el torneo <a href="#">Copa Red Bull LP</a></p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/estadiolol.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text"><a href="#">javierbaez</a>, <a href="#">mariangomez94</a> y <a href="#">jimealvarez</a> jugaran en WORLD LOL CHALLANGE 2020</p>
          <div class="contenedorCategorias"> <a href="#" class="card-link"><img src="img/trofeo.png" alt="" class="categorias">Torneos</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card cartas">
          <img src="img/zumba.jpg" class="card-img-top" alt="...">
          <div class="card-body card-body1">
          <h5 class="card-title"></h5>
          <p class="card-text">Clase de <a href="#">funcionalLP</a>hoy a las 21 hs.</p>
          <div class="contenedorCategorias"><a href="#" class="card-link"> <img src="img/ejercicios-de-estiramiento.png" alt=""> Clases disponibiles</a></div>
          </div>
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
  <hr>
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

@endsection
