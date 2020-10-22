

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Ver Rol</h2></div>

                <div class="card-body">
                   <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                
                    <form action="<?php echo e(route('role.update', $role->id)); ?>" method="POST">
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('PUT'); ?>

                     <div class="container">

                        <h3>Datos Requeridos</h3>

                         <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="name" 
                            placeholder="Name"
                            name="name"
                            value="<?php echo e(old('name', $role->name)); ?>"
                            readonly>
                          </div>
                          <div class="form-group">                            
                            <input type="text" 
                            class="form-control" 
                            id="slug" 
                            placeholder="Slug"
                            name="slug"
                            value="<?php echo e(old('slug' , $role->slug)); ?>"
                            readonly>
                          </div>

                          <div class="form-group">
                            
                            <textarea  readonly class="form-control" placeholder="Description" name="description" id="description" rows="3"><?php echo e(old('description', $role->description)); ?></textarea>
                          </div>

                          <hr>

                          <h3>Acceso completo</h3>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                            <?php if( $role['full-access']=="yes"): ?> 
                              checked 
                            <?php elseif(old('full-access')=="yes"): ?> 
                              checked 
                            <?php endif; ?>
                            
                            
                            >
                            <label class="custom-control-label" for="fullaccessyes">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
                            
                            <?php if( $role['full-access']=="no"): ?> 
                              checked 
                            <?php elseif(old('full-access')=="no"): ?> 
                              checked 
                            <?php endif; ?>
                            
                            
                            >
                            <label class="custom-control-label" for="fullaccessno">No</label>
                          </div>

                          <hr>


                          <h3>Lista de Permisos</h3>


                          <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" 
                            disabled
                            class="custom-control-input" 
                            id="permission_<?php echo e($permission->id); ?>"
                            value="<?php echo e($permission->id); ?>"
                            name="permission[]"

                            <?php if( is_array(old('permission')) && in_array("$permission->id", old('permission'))    ): ?>
                            checked

                            <?php elseif( is_array($permission_role ?? '') && in_array("$permission->id", $permission_role ?? '')    ): ?>
                            checked

                            <?php endif; ?>
                            >
                            <label class="custom-control-label" 
                                for="permission_<?php echo e($permission->id); ?>">
                                <?php echo e($permission->id); ?>

                                - 
                                <?php echo e($permission->name); ?> 
                                <em>( <?php echo e($permission->description); ?> )</em>
                            
                            </label>
                          </div>


                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <hr>
                          
                          <a class="btn btn-success" href="<?php echo e(route('role.edit',$role->id)); ?>">Editar</a>
                          <a class="btn btn-danger" href="<?php echo e(route('role.index')); ?>">Volver</a>








                     </div>




















                    </form>








                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/role/view.blade.php ENDPATH**/ ?>