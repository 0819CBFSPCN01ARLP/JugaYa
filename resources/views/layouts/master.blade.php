<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JugaYa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    @yield('links')
  </head>
  <body data-layout="topnav">
    <div class="wrapper">
        <div class="content-page">
            <div class="content">
                <!-- NAVEGADOR -->
                <!--LOGO PRINCIPAL-->
                <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                    <div class="container-fluid">
                      <a href="../eventos" class="topnav-logo">
                          <span class="topnav-logo">
                              <img src="/img/logov2.png" alt="" height="50">
                          </span>
                      </a>
                <!--FIN LOGO-->
                <!--DESPLEGABLE DERECHA-->
                  <ul class="list-unstyled topbar-right-menu float-right mb-0">
                 <!--NO LOGUEADO-->
                    @if(!Auth::user())
                      <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" id="topbar-languagedrop" href="{{ route('login') }}" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ __('Entrar') }}
                        </a>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" id="topbar-languagedrop" href="{{ route('register') }}" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ __('Registrarme!') }}
                        </a>
                    </li>
                  @endif
                 <!--LOGUEADO-->
                  @if (Auth::user())
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="pages-starter.html#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="/storage/{{Auth::user()->profile_img}}" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">{{Auth::user()->name}} {{Auth::user()->lastname}}</span>
                                <span class="account-position">{{Auth::user()->username}}</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenido!</h6>
                            </div>
                            <a href="/miProfile" class="dropdown-item notify-item">

                                <span>Perfil</span>
                            </a>
                            <a href="/miseventos" class="dropdown-item notify-item">
                                <span>Mis Eventos</span>
                            </a>

                            <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                  @endif
                </ul>

                    </div>
                  </div>
                  <!-- TERMINA NAVEGADOR-->
                  @yield('section')
                  </div>
                  <!--CONTENIDO-->


                  <!--FOOTER-->
                  <footer class="footer">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                             © Juga Ya - jugaya.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <a href="faq">FAQs</a>
                                <a href="javascript: void(0);">Contactanos</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  </footer>

              </div>
          </div>

    </body>
</html>
