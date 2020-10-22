

<?php $__env->startSection('title', 'Cliente'); ?>
<link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
<link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
<?php $__env->startSection('content'); ?>
    <div class="content">
    <div class="animated fadeIn">
        <div class="caja">
            <div class="contenedor">
                
                <div class="c">
                    <div class="foto">
                        <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                    </div>
                    <div class="c1" aling="center">
                        <h1>Nombre:</h1>
                        <h2>Descripcion</h2>
                    </div>
                </div>
            </div>
            <div class="contenedor">
                <div class="e2">            
                    <ul class="navs">
                        <li><a class="active" href="<?php echo e(url('/Cliente')); ?>">Ver</a></li>
                        <li><a href="<?php echo e(url('/Cliente/create')); ?>">Crear</a></li>
                    </ul>
                </div>
            </div>
            <div class="contenedorn">
                <div class="n">
                <table class="table">
	                <thead class="thead-dark">
                        <tr>
                           <td>ID</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Telefono</td>
                        </tr>        
	                </thead>
	                <tbody>
                        <?php $__currentLoopData = $Cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><center><?php echo e($Cliente->cli_id); ?></center></td>
                        <td><center><?php echo e($Cliente->cli_nombreyapellido); ?></center></td>
                        <td><center><?php echo e($Cliente->cli_direccion); ?></center></td>
                        <td><center><?php echo e($Cliente->cli_telefono); ?></center></td>

                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="contenedorn">
                <div class="n1"><a class="btn btn-primary" href="/ReporteC">Exportar pdf</a></div>
            </div>
            

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/c/index.blade.php ENDPATH**/ ?>