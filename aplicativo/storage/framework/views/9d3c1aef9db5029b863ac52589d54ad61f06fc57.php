

<?php $__env->startSection('title', 'Mostrar Producto'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST"action="<?php echo e(route('c.show', $clientes->$)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <h4><?php echo e($clientes->cli_nombreyapellido); ?></h4>
        <h4><?php echo e($clientes->cli_direccion); ?></h4>
        <h4>$<?php echo e($clientes->cli_telefono); ?></h4>
    </form>
<?php $__env->stopSection(); ?>
<!--        <?php echo csrf_field(); ?>
        <h2>Mostrar Producto</h2>
        <h3>Nombre:</h3>
        <h4><?php echo e($clientes->cli_nombreyapellido); ?></h4>
        <h3>Descripcion:</h3>
        <h4><?php echo e($clientes->cli_direccion); ?></h4>
        <h3>Precio:</h3>
        <h4>$<?php echo e($clientes->cli_telefono); ?></h4>
        <a href="<?php echo e(url('/Cliente')); ?>">Cancelar</a>--!>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/c/show.blade.php ENDPATH**/ ?>