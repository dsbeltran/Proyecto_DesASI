

<?php $__env->startSection('title', 'Añadir Empleados'); ?>

<?php $__env->startSection('content'); ?>
    
    <form method="POST" action="/Empleado">
        <?php echo csrf_field(); ?>
        <h2>Añadir Empleados</h2>
        <label for="emp_id">Empleados Id:</label><br>
        <input placeholder="Ingrese id" name="emp_id" type="text"><br><br>
        <label for="emp_nombreyapellido">Nombre:</label><br>
        <input placeholder="Ingrese Nombre y Apellido" name="emp_nombreyapellido" type="text"><br><br>
        <label for="empl_direccion">Direccion:</label><br>
        <textarea placeholder="Ingrese direccion" name="empl_direccion" rows="4"></textarea><br><br>
        <label for="ger_id">Gerente_id:</label><br>
        <input placeholder="Ingrese ID" name="ger_id" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="<?php echo e(url('/Empleado')); ?>">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/e/add.blade.php ENDPATH**/ ?>