

<?php $__env->startSection('title', 'Añadir Venta Descripcion'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="/Venta_descripcion">
        <?php echo csrf_field(); ?>
        <h2>Añadir Venta Descripcion</h2>
        <label for="vdes_id">Venta Descripción ID:</label><br>
        <input placeholder="Venta Descripción ID" name="vdes_id" type="text"><br><br>
        <label for="ven_id">Venta ID:</label><br>
        <input placeholder="Venta ID" name="ven_id" type="text"><br><br>
        <label for="pro_id">Producto ID:</label><br>
        <input placeholder="Producto ID" name="pro_id" type="text"><br><br>
        <label for="vdes_precio">Precio:</label><br>
        <input placeholder="Ingrese Precio" name="vdes_precio" type="text"><br><br>
        <label for="vdes_des">Descripción:</label><br>
        <textarea placeholder="Ingrese Descripción" name="vdes_des" rows="4"></textarea><br><br>
        
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Venta_descripcion')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/vdes/add.blade.php ENDPATH**/ ?>