<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Clientes</h1>
            <p>A continuacion se despiga un reporte donde se encuetra toda la informacion de todos los Clientes registrados</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($cliente->cli_id); ?></th>
                            <td><?php echo e($cliente->cli_nombreyapellido); ?></td>
                            <td><?php echo e($cliente->cli_direccion); ?></td>
                            <td><?php echo e($cliente->cli_telefono); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </body>
</html><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/Report/ReportC.blade.php ENDPATH**/ ?>