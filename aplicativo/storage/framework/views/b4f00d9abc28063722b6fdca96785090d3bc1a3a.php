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
<h1>Oreden de Trabajo</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de toda las Oredenes de Trabajo registradas</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Orden ID</th>
                        <th scope="col">Empleado ID</th>
                        <th scope="col">Estandar ID</th>
                        <th scope="col">Fecha Inico</th>
                        <th scope="col">Fecha Fin</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Oreden_detrabajos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Oreden_detrabajo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($Oreden_detrabajo->ord_id); ?></th>
                            <td><?php echo e($Oreden_detrabajo->emp_id); ?></td>
                            <td><?php echo e($Oreden_detrabajo->est_id); ?></td>
                            <td><?php echo e($Oreden_detrabajo->ord_fecha_ini); ?></td>
                            <td><?php echo e($Oreden_detrabajo->ord_fecha_fin); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
</body>
</html><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/Report/ReportOt.blade.php ENDPATH**/ ?>