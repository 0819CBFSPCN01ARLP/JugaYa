<?php $__env->startSection('links'); ?>
  <script src="/js/functionsRegister.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('section'); ?>
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Formulario de Registro')); ?></div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" onsubmit="return validar()" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label  for="name" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Nombre')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Last_Name" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Apellido')); ?></label>

                            <div class="col-md-6">
                                <input id="Last_Name" type="text" class="form-control <?php if ($errors->has('Last_Name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Last_Name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Last_Name" value="<?php echo e(old('Last_Name')); ?>" required autocomplete="Last_Name" autofocus>

                                <?php if ($errors->has('Last_Name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Last_Name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Username" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67" ><?php echo e(__('Nombre de Usuario')); ?></label>

                            <div class="col-md-6">
                                <input id="Username" type="text" class="form-control <?php if ($errors->has('Username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Username" value="<?php echo e(old('Username')); ?>" required autocomplete="Username" autofocus>

                                <?php if ($errors->has('Username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Username'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Correo Electrónico')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Cellphone" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Celular')); ?></label>

                            <div class="col-md-6">
                                <input id="Cellphone" type="text" class="form-control <?php if ($errors->has('Cellphone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Cellphone'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="Cellphone" value="<?php echo e(old('Cellphone')); ?>" required autocomplete="Cellphone" autofocus>

                                <?php if ($errors->has('Cellphone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('Cellphone'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="intereses" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Intereses')); ?></label>

                            <div class="col-md-6">
                                <textarea name="intereses" rows="6" cols="80" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile_img" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Foto de Perfil')); ?></label>

                            <div class="col-md-6">
                                <input id="profile_img" type="file" class="form-control <?php if ($errors->has('profile_img')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('profile_img'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="profile_img" value="<?php echo e(old('profile_img')); ?>" required autocomplete="profile_img" autofocus>

                                <?php if ($errors->has('profile_img')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('profile_img'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:#0F2D67"><?php echo e(__('Confirmar Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('¡Registrarme!')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="/functionsRegister.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JugaYa\resources\views/auth/register.blade.php ENDPATH**/ ?>