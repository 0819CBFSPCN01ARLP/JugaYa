<?php $__env->startSection('section'); ?>
<?php
use App\User;
use Illuminate\Support\Facades\Auth;
?>
<div class="container-fluid">
  <div class="row justify-content-center pt-3">
    <div class="col-xl-8 col-lg-8 ">
      <div class="card text-center">
        <div class="card-body">

        <img src="/storage/<?php echo e($user->profile_img); ?>" class="rounded-circle avatar-lg img-thumbnail"             alt="profile-image">

         <h4  style="color:#0F2D67" class="mb-0 mt-2 mb-2"><?php echo e($user->username); ?></h4>
       <!--CHEQUEO SI LO SIGUE O NO-->
         <?php
                 $id=Auth::id();
                 $LoginUser=User::find($id);
                  $following=$LoginUser->following;
                 $loSigue=false;

                   foreach ($following as $follow){
                       if ($follow->id==$user->id){
                          $loSigue=true;
                       }
                    }

                   ?>
<?php if($user->id!=Auth::id()): ?>
  <?php if(!$loSigue): ?>
 <a href="/followUser/<?php echo e($user->id); ?>" class="btn btn-sm btn-success unirse">Seguir</a>
   <?php endif; ?>
<?php if($loSigue): ?>
<a href="#" class="btn btn-sm btn-succes unirse">Seguido</a>
<a href="/unfollowUser/<?php echo e($user->id); ?>" class="btn btn-sm btn-danger unirse">Dejar de seguir</a>
<?php endif; ?>
<?php endif; ?>


         <div class="text-left mt-3">

          <p class="mb-2 font-13" style="color:#0F2D67"><strong>Nombre completo:</strong><span class="ml-1"><?php echo e($user->last_name); ?> <?php echo e($user->name); ?> </span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Intereses:</strong> <span class="ml-1"><?php echo e($user->intereses); ?>  </span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Teléfono:</strong><span class="ml-1"><?php echo e($user->cellphone_number); ?></span></p>
          <p class="mb-2 font-13"style="color:#0F2D67 "><strong>Email:</strong> <span class="ml-1 "><?php echo e($user->email); ?></span></p>
          <div class="dropdown">
<button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Seguidos
</button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

<?php
  $seguidos=$user->following
?>
<?php if(count($seguidos)==0): ?>
<a class="dropdown-item" href="#">El usuario no sigue a nadie</a>
<?php endif; ?>
<?php $__currentLoopData = $seguidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a class="dropdown-item" href="profile/<?php echo e($follow->id); ?>"><?php echo e($follow->username); ?></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
         </div>


          </div> <!-- end card-body -->
          </div> <!-- end card -->



                              </div> <!-- end col-->


                          </div>
                          <!-- end row-->

                      </div>
                      <!-- container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/profile.blade.php ENDPATH**/ ?>