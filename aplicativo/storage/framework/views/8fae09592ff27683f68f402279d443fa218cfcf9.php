

<?php $__env->startSection('title', 'Añadir Gerente'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="/Gerente">
        <?php echo csrf_field(); ?>
        <h2>Añadir Gerente</h2>
        <label for="ger_id">Gerente Id:</label><br>
        <input placeholder="Ingrese id" name="ger_id" type="text"><br><br>
        <label for="ger_nombre">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="ger_nombre" type="text"><br><br>
        <label for="ger_depar">Departamento:</label><br>
        <textarea placeholder="Ingrese Departamento" name="ger_depar" rows="4"></textarea><br><br>
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Gerente')); ?>">Cancelar</a>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/g/add.blade.php ENDPATH**/ ?>