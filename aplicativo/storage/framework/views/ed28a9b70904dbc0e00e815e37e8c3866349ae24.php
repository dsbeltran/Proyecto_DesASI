<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>Ventas</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de todas las Ventas registradas</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Venta ID</th>
                        <th scope="col">Cliente ID</th>
                        <th scope="col">Empleado ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Fecha de Entrega</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ventas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($Ventas->ven_id); ?></th>
                            <td><?php echo e($Ventas->cli_id); ?></td>
                            <td><?php echo e($Ventas->emp_id); ?></td>
                            <td><?php echo e($Ventas->ven_fecha); ?></td>
                            <td><?php echo e($Ventas->ven_fechaentrega); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
</body>
</html><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/Report/ReportV.blade.php ENDPATH**/ ?>