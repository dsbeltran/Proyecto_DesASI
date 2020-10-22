

<?php $__env->startSection('title', 'Añadir Productos'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="/Producto">
        <?php echo csrf_field(); ?>
        <h2>Añadir Productos</h2>
        <label for="pro_id">Producto Id:</label><br>
        <input placeholder="Ingrese id" name="pro_id" type="text"><br><br>

        <label for="pro_nombre">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="pro_nombre" type="text"><br><br>

        <label for="pro_pvp">Precio de venta al publico:</label><br>
        <input placeholder="Ingrese Precio de venta al publico" name="pro_pvp" type="text"><br><br>

        <label for="pro_pvadistri">Precio al por mayor:</label><br>
        <input placeholder="Ingrese Precio al por mayor" name="pro_pvadistri" type="text"><br><br>

        <label for="pro_descripcion">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="pro_descripcion" rows="4"></textarea><br><br>
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Producto')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/p/add.blade.php ENDPATH**/ ?>