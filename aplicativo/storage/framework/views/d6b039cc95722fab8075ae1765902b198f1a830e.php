

<?php $__env->startSection('title', 'Añadir Oreden Descripcion'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="/Oreden_detrabajodescrip">
        <?php echo csrf_field(); ?>
        <h2>Añadir Oreden Descripcion</h2>
        <label for="odes_id">O Descrip ID:</label><br>
        <input placeholder="Ingrese Orden Descrip ID" name="odes_id" type="text"><br><br>
        <label for="pro_id">Producto ID:</label><br>
        <input placeholder="Ingrese Producto ID" name="pro_id" type="text"><br><br>
        <label for="ord_id">Oreden ID:</label><br>
        <input placeholder="Ingrese Oreden ID" name="ord_id" type="text"><br><br>
        <label for="odes_desc">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="odes_desc" rows="4"></textarea><br><br>

        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Oreden_detrabajodescrip')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/otdes/add.blade.php ENDPATH**/ ?>