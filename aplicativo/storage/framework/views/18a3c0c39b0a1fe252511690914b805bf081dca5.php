

<?php $__env->startSection('title', 'Empleados'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Empleado.css">
</head>

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
                        <h1>Empleado de Ventas</h1>
                        <h2>Nombre:</h2>
                        <h3>Descripcion</h3>
                    <div class="c2">
                        <div class="valores">
                            <b>Ventas Totales:</b>
                        </div>
                        <div class="valores1">
                            <div class="tarjeta">                                            
                                <div class="emptexto">$<span class="count">235</span></div>            
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="contenedorn">
                <div class="n">
                    <ul class="horizontalgray">
                        <li><a href="">Ventas</a></li>
                    </ul>
                </div>
            </div>
            <div class="contenedorc">
                <div class="o">
                    <table class="table">
	                    <thead class="thead-dark">
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Direccion</td>
                                <td>Gerente_id</td>
                            </tr>
	                    </thead>
	                    <tbody>
                            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><center><?php echo e($empleado->emp_id); ?></center></td>
                                <td><center><?php echo e($empleado->emp_nombreyapellido); ?></center></td>
                                <td><center><?php echo e($empleado->empl_direccion); ?></center></td>
                                <td><center><?php echo e($empleado->ger_id); ?></center></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    </tbody>
                    </table>
                </div>
            </div>
            <div class="contenedorn">
                <div class="n1"><a class="btn btn-primary" href="/ReporteE">Exportar pdf</a></div>
            </div>
        </div>
    </div><!-- .animated -->
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/e/index.blade.php ENDPATH**/ ?>