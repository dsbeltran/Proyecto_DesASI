

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Create Role</h2></div>

                <div class="card-body">
                    <?php echo $__env->make('custom\message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('role.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="container">

                            <h3>Required data</h3>

                            <div class="form-group">                            
                                <input type="text" class="form-control" 
                                id="name" 
                                placeholder="Name"
                                name="name"
                                value="<?php echo e(old('name')); ?>"
                                >
                            </div>
                            <div class="form-group">                            
                                <input type="text" 
                                class="form-control" 
                                id="slug" 
                                placeholder="Slug"
                                name="slug"
                                value="<?php echo e(old('slug')); ?>"
                                >
                                
                            </div>

                            <div class="form-group">                                
                                <textarea class="form-control" placeholder="Description" 
                                name="description" id="description" rows="3">
                                <?php echo e(old('description')); ?></textarea>
                            </div>

                            <hr>

                            <h3>Full Access</h3>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessyes" name="full-access" 
                                class="custom-control-input" value="yes"
                                <?php if(old('full-access')=="yes"): ?>
                                    checked
                                <?php endif; ?>
                                >
                                <label class="custom-control-label" for="fullaccessyes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="fullaccessno" name="full-access" 
                                class="custom-control-input" value="no" 
                                <?php if(old('full-access')=="no"): ?>
                                    checked
                                <?php endif; ?>
                                <?php if(old('full-access')===null): ?>
                                    checked
                                <?php endif; ?>
                                
                                >
                                <label class="custom-control-label" for="fullaccessno">No</label>
                            </div>

                            <hr>


                            <h3>Permission List</h3>


                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" 
                                class="custom-control-input" 
                                id="permission_<?php echo e($permission->id); ?>"
                                value="<?php echo e($permission->id); ?>"
                                name="permission[]"
                                <?php if(
                                    is_array(old('permission'))&& 
                                    in_array("$permission->id", old('permission'))
                                    ): ?>
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
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/role/create.blade.php ENDPATH**/ ?>