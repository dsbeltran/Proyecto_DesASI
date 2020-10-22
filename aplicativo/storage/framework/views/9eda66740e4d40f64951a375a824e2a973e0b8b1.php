

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Lista de Usuarios</h2></div>

                <div class="card-body">


                    <br><br>

                    <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol(es)</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <th scope="row"><?php echo e($user->id); ?></th>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                <?php if(isset( $user->roles[0]->name )): ?>
                                  <?php echo e($user->roles[0]->name); ?>

                                <?php endif; ?>
                                
                                </td>
                                <td> <a class="btn btn-info" href="<?php echo e(route('user.show',$user->id)); ?>">Ver</a> </td>  
                                <td> <a class="btn btn-success" href="<?php echo e(route('user.edit',$user->id)); ?>">Editar</a> </td>  
                                <td> 
                                  <form action="<?php echo e(route('user.destroy',$user->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">Borrar</button>
                                  </form>
                                  

                                </td>  
                            </tr>      
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            

                            
                          
                         
                        </tbody>
                      </table>

                      <?php echo e($users->links()); ?>





                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/user/index.blade.php ENDPATH**/ ?>