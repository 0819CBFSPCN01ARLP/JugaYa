<?php $__env->startSection('section'); ?>
  <div class="container">
		<h2>Resultados:</h2>
		<h3>Usuarios</h3>
    <div class="row mb-5">
    <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="col-md-4">
				<div class="card">
					<img src="/storage/<?php echo e($usuario['profile_img']); ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo e($usuario["username"]); ?></h5>
						<p class="card-text"><?php echo e($usuario["name"]); ?> <?php echo e($usuario["last_name"]); ?> </p>
						<a href="/profile/<?php echo e($usuario["id"]); ?>" class="btn btn-sm btn-primary">Ver Perfil</a>
					</div>
				</div>
			</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <p style="margin-left:15px">Wow... Such empty</p>
    <?php endif; ?>
  </div>
</div>

<div class="container">
  <h2>Resultados: </h2>
  <h3>Eventos</h3>
  <div class="row mb-5">
  <?php $__empty_1 = true; $__currentLoopData = $evento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-4">
      <div class="card">
        <img src="http://lorempixel.com/1920/1080/sports/" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($eventos["name"]); ?></h5>
          <p class="card-text"><?php echo e($eventos["deporte"]); ?> </p>
          <p class="card-text"><?php echo e($eventos["descripcion"]); ?> </p>
          <a href="#" class="btn btn-sm btn-primary">Ver Perfil</a>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p style="margin-left:15px">Wow... Such empty</p>
  <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/search.blade.php ENDPATH**/ ?>