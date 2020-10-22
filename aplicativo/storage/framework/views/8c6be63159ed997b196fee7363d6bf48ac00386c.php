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
<h1>Materia Prima</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de toda la Materia Prima registrada</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Materia_primas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($Materia_primas->qui_id); ?></th>
                            <td><?php echo e($Materia_primas->qui_nombre); ?></td>
                            <td><?php echo e($Materia_primas->qui_descrip); ?></td>
                            <td><?php echo e($Materia_primas->qui_preciocompra); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
</body>
</html><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/Report/ReportMt.blade.php ENDPATH**/ ?>