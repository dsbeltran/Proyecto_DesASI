

<?php $__env->startSection('title', 'Oreden de Trabajo'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Produc.css">
</head>

<?php $__env->startSection('content'); ?>
<div class="animated fadeIn">
        <div class="caja">
                <div class="contenedor">
                        <div class="c" style="padding: 30px">
                        <h1>Orden de Trabajo</h1>
                        </div>
                </div>
                <div class="contenedorn">
                <div class="n">
                        <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                <td>Orden ID</td>
                                <td>Empleado ID</td>
                                <td>Estandar ID</td>
                                <td>Fecha Inico</td>
                                <td>Fecha Fin</td>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $oreden_detrabajo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oreden_detrabajo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><center><?php echo e($oreden_detrabajo->ord_id); ?></center></td>
                                        <td><center><?php echo e($oreden_detrabajo->emp_id); ?></center></td>
                                        <td><center><?php echo e($oreden_detrabajo->est_id); ?></center></td>
                                        <td><center><?php echo e($oreden_detrabajo->ord_fecha_ini); ?></center></td>
                                        <td><center><?php echo e($oreden_detrabajo->ord_fecha_fin); ?></center></td>
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                        </table>
                </div>
                </div>
                <div class="contenedorn">
                        <div class="n1"><a class="btn btn-primary" href="/ReporteOt">Exportar pdf</a></div>
                </div>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/ot/index.blade.php ENDPATH**/ ?>