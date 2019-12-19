<?php $__env->startSection('section'); ?>
<?php
  use App\User;
  use App\location;
  use App\Evento;
  use Illuminate\Support\Facades\Auth;
?>

<body>


  <div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-xl-8 col-lg-8">
           <!-- CHEQUEANDO QUE LLEGEN LOS EVENTOS-->
            <div class="tab-content mb-3">
                <div class="tab-pane show active" id="basic-form-preview">
                  <div class="accordion custom-accordion" id="custom-accordion-one">
                      <div class="card mb-0">


                      </div>
                  </div>
                </div> <!-- end preview-->
            </div> <!-- end tab-content-->

            <!-- end new post -->
              <?php
              $evento=Evento::find($id);
              $creator_id=$evento->user_id;
              $creator_user=User::find($creator_id);
              $location_id=$evento->location_id;
              $location_name=location::find($location_id)->name;
              $participantes=$evento->Users;
              $pertenece=false;
              $usuario_logeado_id=Auth::id();
              if ($usuario_logeado_id==$creator_id) {
                $pertenece=true;
              }
              foreach ($participantes as $participante) {
              if ($usuario_logeado_id==$participante->id) {
                 $pertenece=true;
              }
              }
              ?>

              <div class="card">
                  <div class="card-body pb-1">
                      <div class="media">
                          <img class="mr-2 rounded" src="storage/<?php echo e($creator_user["profile_img"]); ?>" alt="imagen de perfil " height="32">
                          <div class="media-body">
                              <div class="dropdown float-right text-muted">
                                  <a href="apps-social-feed.html#" class="dropdown-toggle arrow-none card-drop"
                                      data-toggle="dropdown" aria-expanded="false">
                                      ...
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <?php if(Auth::id() == $creator_user["id"]): ?>
                                      <!-- item-->
                                      <a href="editarEvento/<?php echo e($evento->id); ?>" class="dropdown-item">Editar</a>
                                      <!-- item-->
                                      <a href="eliminarEvento/<?php echo e($evento->id); ?>" class="dropdown-item">Eliminar</a>
                                    <?php else: ?>
                                      <!-- item-->
                                      <a href="/eventoUnico/{id}" class="dropdown-item">Ver Evento</a>
                                    <?php endif; ?>
                                  </div>
                              </div>
                              <h5 class="m-0"> <a href="/profile/<?php echo e($creator_id); ?>"><?php echo e($creator_user["username"]); ?></a> </h5>
                              <p class="text-muted"><small><?php echo e(date('d/m/y', strtotime($evento->date))); ?> <span class="mx-1">⚬</span> <span><?php echo e($evento->deporte); ?></span><span class="mx-1">⚬</span><span><?php echo e($location_name); ?></span></span></span></small></p>
                          </div>


                      </div>

                      <hr class="m-0" />

                      <div class="font-16 text-center text-dark my-3">
                        <?php echo e($evento->descripcion); ?>

                      </div>

                      <hr class="m-0" />

                      <div class="my-1">

                          <?php if($pertenece==false): ?>
                          <a href="/unirParticipante/<?php echo e($evento->id); ?>" class="btn btn-sm btn-success unirse">Unirse</a>   <script src="/js/evento.min.js"></script>
                        <?php endif; ?>
                          <?php if($pertenece==true): ?>
                          <a href="/sacarParticipante/<?php echo e($evento->id); ?>" class="btn btn-sm btn-danger unirse">Cancelar participación</a>   <script src="/js/evento.min.js"></script>
                          <?php endif; ?>


                      </div>
                      <div class="dropdown">
  <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Participantes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a class="dropdown-item" href="profile/<?php echo e($participante->id); ?>"><?php echo e($participante->username); ?></a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
            <!-- start news feeds -->
                              </div>
                </div> <!-- end card-body -->

            </div> <!-- end card -->
            <!-- end news feeds -->
        </div>
    </div> <!--end row -->


</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/eventoUnico.blade.php ENDPATH**/ ?>