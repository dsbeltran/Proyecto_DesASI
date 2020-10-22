<?php if(session('status_success')): ?>
 <div class="alert alert-success" role="alert">
     <?php echo e(session('status_success')); ?>

 </div>
<?php endif; ?>

<?php if($errors->any()): ?>
 <div class="alert alert-danger" role="alert">
     <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
         <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
 </div>
<?php endif; ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/custom/message.blade.php ENDPATH**/ ?>