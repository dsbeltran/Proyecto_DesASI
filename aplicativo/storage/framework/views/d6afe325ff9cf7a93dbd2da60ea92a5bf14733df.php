<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Maquinarias</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de toda las Maquinarias registradas</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Tiempo de uso</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $Maquinarias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Maquinarias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($Maquinarias->mez_id); ?></th>
                            <td><?php echo e($Maquinarias->mez_descripcion); ?></td>
                            <td><?php echo e($Maquinarias->mez_tiemp); ?></td>
                            <td><?php echo e($Maquinarias->mez_nombre); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
</body>
</html><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/Report/ReportMq.blade.php ENDPATH**/ ?>