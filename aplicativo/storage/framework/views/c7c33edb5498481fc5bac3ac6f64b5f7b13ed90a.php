

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Ver User</h2></div>
                <div class="card-body">
                   <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('user.update', $user->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>
                     <div class="container">                
                          <h3>Datos Requeridos</h3>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="name" 
                            placeholder="Name"
                            name="name"
                            value="<?php echo e(old('name', $user->name)); ?>"
                            disabled>
                          </div>
                          <div class="form-group">                            
                            <input type="text" 
                            class="form-control" 
                            id="email" 
                            placeholder="email"
                            name="email"
                            value="<?php echo e(old('email' , $user->email)); ?>"
                            disabled>
                          </div>
                          
                          <div class="form-group">                            
                            <select disabled class="form-control"  name="roles" id="roles">
                              <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>"
                                  <?php if(isset($user->roles[0]->name)): ?>
                                    <?php if($role->name ==  $user->roles[0]->name): ?>
                                      selected
                                    <?php endif; ?>
                                  <?php endif; ?>
                                
                                
                                ><?php echo e($role->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>

                          
                          <hr>
                          
                          <a class="btn btn-success" href="<?php echo e(route('user.edit',$user->id)); ?>">Editar</a>
                          <a class="btn btn-danger" href="<?php echo e(route('user.index')); ?>">Volver</a>








                     </div>




















                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/user/view.blade.php ENDPATH**/ ?>