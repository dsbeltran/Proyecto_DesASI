

<?php $__env->startSection('title', 'Inicio'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Inicio.css">
</head>
<?php $__env->startSection('content'); ?>
<div class="content">
            <div class="animated fadeIn">
                <div class="caja">
                    <div class="contenedor">
                      <div class="H">
                        Laboratorios Glamour
                      </div>
                      
                    </div>
                    <div class="contenedor">
                      <div class="c">
                        <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                      </div>
                      <div class="c">
                        <div class="foto">
                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                        </div>
                        
                        <div class="form">
              <form method="POST" action="<?php echo e(route('login')); ?>" class="login-form">
              <?php echo csrf_field(); ?>
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit" class="btn btn-primary">
                  <?php echo e(__('Login')); ?>

                </button>
                <?php if(Route::has('password.request')): ?>
                  <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                  </a>
                <?php endif; ?>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
              </form>
            </div>
                      </div>
                    </div>
                    <div class="contenedor">
                      <div class="f">
                        <h2>PRODUCTOS</h2>
                        Tenemos nuestra propia linea de productos, los cuales son de calidad y propios de nuestra empresa.
                      </div>
                      <div class="f">
                        <h2>SOBRE NOSOTROS</h2>
                        Somos una empresa de laboratorio, en la cuál elaboramos diferentes tipos de productos, como shampoo, jabones, entre otras cosas...
                      </div>    
                      <div class="f">
                        <h2>Contacto</h2>
                        Comunícate al: 02 - 4510990
                      </div>
                    </div>
                    <div class="contenedor">
                      <div class="d">
                        <h1>Localizacion</h1>
                      </div>
                    </div>
                    <div class="contenedor">
                      <div class="f">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.777864946753!2d-78.48703528577762!3d-0.25801779981174683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d599995659640f%3A0x9cfd58f72f4d91d7!2sLABORATORIOS%20GLAMOUR-ISABELLA!5e0!3m2!1sen!2sec!4v1588845749994!5m2!1sen!2sec" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>    
                      <div class="f">
                        <h2>Direccion</h2>
                        Estamos ubicados en la Autopista General Rumiñahui Y Diego de Almagro
                      </div>
                    </div>
                  </div>

            </div><!-- .animated -->
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/1_Inicio.blade.php ENDPATH**/ ?>