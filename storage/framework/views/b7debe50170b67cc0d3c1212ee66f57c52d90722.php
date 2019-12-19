<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8" />
      <title>Juga Ya | Torneos y Partidos</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">

      <!-- App css -->
      <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
      <link href="css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
      <?php echo $__env->yieldContent('links'); ?>
    </head>

    <body class="loading" data-layout="topnav">
        <!-- Begin page -->
        <div class="wrapper">
            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
                        <div class="container-fluid">

                            <!-- LOGO -->
                            <a href="" class="topnav-logo">
                                <span class="topnav-logo">
                                    <img src="img/logov2.png" alt="" height="50">
                                </span>
                            </a>
                            <ul class="list-unstyled topbar-right-menu float-right mb-0">
                                 <?php if(!Auth::user()): ?>
                                <li class="dropdown notification-list topbar-dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" id="topbar-languagedrop" href="<?php echo e(route('login')); ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo e(__('Entrar')); ?>

                                    </a>
                                </li>
                                <li class="dropdown notification-list topbar-dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" id="topbar-languagedrop" href="<?php echo e(route('register')); ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo e(__('Registrarme!')); ?>

                                    </a>
                                </li>
                              <?php endif; ?>
                              <?php if(Auth::user()): ?>
                                <li class="dropdown notification-list">
                                    <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="pages-starter.html#" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="account-user-avatar">
                                            <img src="/storage/<?php echo e(Auth::user()->profile_img); ?>" alt="user-image" class="rounded-circle">
                                        </span>
                                        <span>
                                            <span class="account-user-name"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></span>
                                            <span class="account-position"><?php echo e(Auth::user()->username); ?></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                                        <div class=" dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Bienvenido!</h6>
                                        </div>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-circle mr-1"></i>
                                            <span>Mis Perfil</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-account-edit mr-1"></i>
                                            <span>Mis Eventos</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="mdi mdi-lifebuoy mr-1"></i>
                                            <span>Mis Amigos</span>
                                        </a>
                                        <a class="" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                    </div>
                                </li>
                              <?php endif; ?>
                            </ul>

                            <div class="app-search">
                                <form>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Buscar Eventos ..">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    <?php echo $__env->yieldContent('section'); ?>

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                 © Juga Ya - jugaya.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">Nosotros</a>
                                    <a href="javascript: void(0);">Contactanos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
        </div>
        <!-- END wrapper -->

        <!-- bundle -->
        <script src="js/vendor.min.js"></script>
        <script src="js/app.min.js"></script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/layouts\master.blade.php ENDPATH**/ ?>