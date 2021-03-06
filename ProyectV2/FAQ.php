<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JugaYa-FAQ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container" style="margin-top:0px;">
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
    <div class="container-fluid">
    <div class="container">
    <div class="jumbotron banner">
      <h1>FAQ</h1>
      <p>Preguntas frecuentes hechas por usuarios nuevos </p>
    </div>
    </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-lg-3" style="background=#6DC560;">
            <div class="list-group">
             <a href="#sobreJugaYa" class="list-group-item">El Sitio</a>
             <a href="#perfil" class="list-group-item">Usuario y Perfil</a>
             <a href="#seguir" class="list-group-item">Seguir</a>
             <a href="#eventos" class="list-group-item">Eventos</a>
             <a href="#profe" class="list-group-item">Profesor/Entrenador</a>
             <a href="#empresa" class="list-group-item">Complejos Deportivos</a>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="bloque" id="sobreJugaYa">
            <h2>El Sitio</h2>
            <div class="box">
              <h3>¿Que es JugaYa?</h3>
              <p>JugaYa es una red social pensada principalmente para los amantes del deporte, permitiendo la interaccion y comunicacion entre deportistas de diversas disciplinas.</p>
            </div>
            <div class="box">
              <h3>¿Que servicios y/o beneficios me brinda el sitio?</h3>
              <p>Nuesto sitio te permite, ademas de conocer personas interesadas en un mismo deporte, organizar partidos, juntadas y seguir las ultimas noticias
              de tus deportes favoritos, brindando informacion detallada y estadisticas de los mismos. Tambien te ofrecemos la posibilidad de ver eventos cercanos de tu interes. Todo esto con el objetivo
              de facilitar las herramientas necesarias a nuestros usuarios para que practiquen el deporte que mas les guste.</p>
            </div>
            </div>
            <div class="bloque" id="perfil">
            <h2>Usuario y Perfil</h2>
            <div class="box">
              <h3>¿Es necesario crear un usuario?</h3>
              <p>Aunque no es necesario crear una usuario/perfil para acceder a la informacion de los eventos creados por los mismos, si es requisito tener una cuenta registrada para poder realizar determinadas
              acciones en el sitio. Recomendamos <a href="registro.html">crear una cuenta</a> para poder disfrutar de la experiencia completa, es rapido y gratis. </p>
            </div>
            </div>
            <div class="bloque" id="seguir">
            <h2>Seguir</h2>
            <div class="box">
              <h3>¿Que significa "ser amigo" de alguien en JugaYa?</h3>
              <p>Seguir a alguien implica haber elegido suscribirte a las actualizaciones y publicaciones realizadas por el usuario seguido. Cada vez que esta persona publique o se una a un evento, este aparecera en tu cronologia.</p>
            </div>
            <div class="box">
              <h3>¿Como puedo encontrar a una persona en la pagina?</h3>
              <p>Cuando creas una cuenta, podes buscar personas por su nombre/apellido o nombre de usuario.</p>
            </div>
            <div class="box">
              <h3>¿Como se quienes estan en mi lista de amigos</h3>
              <p>Podes ver los usuarios amigos haciendo click en el boton "Mis amigos" que figura en tu perfil.</p>
            </div>
            </div>
            <div class="bloque" id="eventos">
            <h2>Eventos</h2>
            <div class="box">
              <h3>¿Que es un evento?</h3>
              <p>Una vez creado el perfil, el usuario tiene la posibilidad de organizar o sumarse a un evento. Estos son convocatorias que pueden hacer los usuarios registrados en el sitio acerca de un deporte especifico.</p>
            </div>
            <div class="box" id="crearEvento">
              <h3>¿Como puedo crear un evento?</h3>
              <p>Una vez logueados, lo unico que debemos hacer es clickear en "Crear evento deportivo" desde la misma pagina de inicio o desde nuestro perfil, para ir a la ventana de creacion.
              Una vez abierta la ventana debemos completar los campos obligatorios y... ¡listo!, el evento ya se encuentra creado.</p>
            </div>
            </div>
            <div class="bloque" id="profe">
            <h2>Entrenadores y Profesores</h2>
            <div class="box">
              <h3>Soy entrenador ¿Puedo publicar mis clases en la pagina?</h3>
              <p>Claro! No hay ningun problema, nuestra plataforma esta abierta para cualquier profesor/entrenador que desee publicar sus clases.</p>
            </div>
            </div>
            <div class="bloque" id="empresa">
            <h2> Complejos Deportivos </h2>
            <div class="box">
              <h3>¿Sos dueño de un gimnasio o complejo deportivo?</h3>
              <p>Nuestro sitio te permite publicar todos los turnos disponibles para las actividades que alli se puedan practicar. Cada "usuario complejo" tiene un calendario online donde
              puede organizar los turnos disponibles para cada actividad. Tambien brindamos la opcion de organizar torneos y que los usuarios registren sus equipos para los mismos. Para mas informacion y sugerencias sobre el "perfil complejo" no dudes en ponerte en contacto con nosotros.</p>
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
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <a href="registro.php" class="btn btn-danger btn-rounded">Registrate!</a>
    </li>
  </ul>
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
  </body>
</html>
