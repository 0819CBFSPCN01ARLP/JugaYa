@extends('layouts/master')

@section('links')
  <link rel="stylesheet" href="css/faq.css">
@endsection

@section('section')
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

@endsection
