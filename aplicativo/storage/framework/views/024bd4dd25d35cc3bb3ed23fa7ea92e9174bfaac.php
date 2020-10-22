

<?php $__env->startSection('title', 'Añadir Maquinaria'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="/Maquinaria">
        <?php echo csrf_field(); ?>
        <h2>Añadir Maquinaria</h2>
        <label for="mez_id">Maquinaria Id:</label><br>
        <input placeholder="Ingrese id" name="mez_id" type="text"><br><br>
        <label for="mez_descripcion">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="mez_descripcion" rows="4"></textarea><br><br>
        <label for="mez_tiemp">Tiempo:</label><br>
        <input placeholder="Ingrese Tiempo" name="mez_tiemp" type="text"><br><br>
        <label for="mez_nombre">Nombre:</label><br>
        <input placeholder="Ingrese Nombre" name="mez_nombre" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Maquinaria')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/mq/add.blade.php ENDPATH**/ ?>