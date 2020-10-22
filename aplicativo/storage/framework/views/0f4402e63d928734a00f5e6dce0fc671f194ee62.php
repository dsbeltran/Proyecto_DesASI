<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laboratorios Glamur
                </div>

                <div class="links">
                    <a href="<?php echo e(url('Cliente')); ?>">cliente</a>
                    <a href="<?php echo e(url('Empleado')); ?>">empleado</a>
                    <a href="<?php echo e(url('Estandar_de_produccion')); ?>">estandar de produccion</a>
                    <a href="<?php echo e(url('Gerente')); ?>">gerente</a>
                    <a href="<?php echo e(url('Maquinaria')); ?>">maquinaria</a>
                    <a href="<?php echo e(url('Materia_prima')); ?>">materia prima</a>
                    <a href="<?php echo e(url('Oreden_detrabajo')); ?>">oreden de trabajo</a>
                    <a href="<?php echo e(url('Oreden_detrabajodescrip')); ?>">oreden de trabajo descripcion</a>
                    <a href="<?php echo e(url('Producto')); ?>">producto</a>
                    <a href="<?php echo e(url('Venta_descripcion')); ?>">venta descripcion</a>
                    <a href="<?php echo e(url('Venta')); ?>">venta</a>
                    <a href="<?php echo e(url('Home')); ?>">App</a>
                    <a href="<?php echo e(url('role')); ?>">Roles</a>
                    <a href="<?php echo e(url('user')); ?>">Usuario</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/welcome.blade.php ENDPATH**/ ?>