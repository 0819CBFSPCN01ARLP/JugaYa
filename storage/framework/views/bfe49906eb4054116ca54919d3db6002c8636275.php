<?php
  use App\User;
  use App\location;
?>
<?php $__env->startSection('section'); ?>

    <div class="card-body container">
      <form enctype="multipart/form-data" action="/editarEvento/<?php echo e($evento->id); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Título</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre del Evento... " value="<?php echo e($evento["name"]); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Fecha</label>
                <input type="datetime-local" class="form-control" name="date" placeholder="fecha" value="<?php echo e($evento["date"]); ?>">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Tipo de Evento</label>
                <input type="text" class="form-control" name="deporte" aria-describedby="emailHelp" placeholder="Deporte" value="<?php echo e($evento["deporte"]); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ubicación</label>
                <select class="form-control" name="location_id" id="example-select" value="<?php echo e($evento["location"]); ?>">
                  <option value="" disabled selected>Seleccione Ubicación</option>
                  <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value= "<?php echo e($location->id); ?>"><?php echo e($location->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
          </div>
        <div class="col-lg-12">
          <div class="form-group">
            <textarea name="descripcion" rows="5" cols="80" class="form-control" placeholder="Descripcion del evento" value="<?php echo e($evento["descripcion"]); ?>"></textarea>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <button type="submit" class="btn btn-primary">Enviar Información de Evento</button>
          </div>
        </div>
      </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/editarEvento.blade.php ENDPATH**/ ?>