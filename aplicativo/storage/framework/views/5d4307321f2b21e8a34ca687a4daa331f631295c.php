

<?php $__env->startSection('title', 'Añadir Venta'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="/Venta">
        <?php echo csrf_field(); ?>
        <h2>Añadir Venta</h2>
        <label for="ven_id">Venta ID:</label><br>
        <input placeholder="Ingrese Venta ID" name="ven_id" type="text"><br><br>
        <label for="cli_id">Clinete Id:</label><br>
        <input placeholder="Ingrese Cliente ID" name="cli_id" type="text"><br><br>
        <label for="emp_id">Empleado ID:</label><br>
        <input placeholder="Ingrese Empleado ID" name="emp_id" type="text"><br><br>
        <label for="ven_fecha">Fecha:</label><br>
        <input placeholder="Ingrese Fecha" name="ven_fecha" type="text"><br><br>
        <label for="ven_fechaentrega">Fecha de Entrega:</label><br>
        <input placeholder="Ingrese Fecha de Entrega" name="ven_fechaentrega" type="text"><br><br>
        
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Ventas')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/v/add.blade.php ENDPATH**/ ?>