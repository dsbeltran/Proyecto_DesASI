

<?php $__env->startSection('title', 'Añadir Estandar de Produccion'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="/Estandar_de_produccion">
        <?php echo csrf_field(); ?>
        <h2>Añadir Estandar de Produccion</h2>
        <label for="est_id">Estandar ID:</label><br>
        <input placeholder="Ingrese Estandar ID" name="est_id" type="text"><br><br>
        <label for="mez_id">Maquinaria ID:</label><br>
        <input placeholder="Ingrese Maquinaria ID" name="mez_id" type="text"><br><br>
        <label for="qui_id">Materia prima ID:</label><br>
        <input placeholder="Ingrese Materia prima ID" name="qui_id" type="text"><br><br>
        
        <label for="est_nombre">Nombre:</label><br>
        <input placeholder="Ingrese Nombre" name="est_nombre" type="text"><br><br>
        <label for="est_descripcion">Descripción:</label><br>
        <textarea placeholder="Ingrese Descripción" name="qui_id" rows="4"></textarea><br><br>
        
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Estandar_de_produccion')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/es/add.blade.php ENDPATH**/ ?>