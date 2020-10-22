

<?php $__env->startSection('title', 'Añadir Cliente'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="/Cliente">
        <?php echo csrf_field(); ?>
        <h2>Añadir Cliente</h2>
        <label for="cli_id">Cliente Id:</label><br>
        <input placeholder="Ingrese id" name="cli_id" type="text"><br><br>
        <label for="cli_nombreyapellido">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="cli_nombreyapellido" type="text"><br><br>
        <label for="cli_direccion">Direccion:</label><br>
        <textarea placeholder="Ingrese direccion" name="cli_direccion" rows="4"></textarea><br><br>
        <label for="cli_telefono">Telefono:</label><br>
        <input placeholder="Ingrese telefono" name="cli_telefono" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Cliente')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/c/add.blade.php ENDPATH**/ ?>