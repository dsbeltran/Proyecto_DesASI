

<?php $__env->startSection('title', 'O Descrip'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_FacturaCompra.css">
</head>

<?php $__env->startSection('content'); ?>
<div class="animated fadeIn">
    <div class="caja">
        <div class="contenedord">
                        <div class="e">
                            <div class="e2">
                                <h1>Empresa descripcion</h1>
                                <div>(Ruc, Diereccion, Nombre, etc)</div>
                            </div>
                            <div class="e2">
                                <div class="e2">
                                    <h1>Orden de trabajo</h1>
                                </div>
                                <div class="e2">
                                    Nombre, numero de orden, responsable
                                </div>
                            </div>
                        </div>
                        <div class="e">
                                <table class="table">
                                	<thead class="thead-dark">
                                        <tr>
                                                <td>Orden Descrip ID</td>
                                                <td>Producto ID</td>
                                                <td>Oreden ID</td>
                                                <td>Descripcion</td>
                                        </tr>
	                                </thead>
	                                <tbody>
                                        <?php $__currentLoopData = $oreden_detrabajodescrip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oreden_detrabajodescrip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                                <td><center><?php echo e($oreden_detrabajodescrip->odes_id); ?></center></td>
                                                <td><center><?php echo e($oreden_detrabajodescrip->pro_id); ?></center></td>
                                                <td><center><?php echo e($oreden_detrabajodescrip->ord_id); ?></center></td>
                                                <td><center><?php echo e($oreden_detrabajodescrip->odes_desc); ?></center></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                                </tbody>
                                </table>
                        </div>
                        <div class="e">
                            <div class="e">
                                <div class="e">
                                    Confirmar:
                                </div>
                                <div class="e2">
                                    <button class="button button2">Confirmar compra</button>
                                    <button class="button button3">Borrar compra</button>
                                </div>
                            </div>
                            <div class="e2">
                                <div class="e">
                                    <div class="e">
                                        Total   
                                    </div>
                                    <div class="e">
                                        0,00$
                                    </div>
                                </div>
                            </div>
                        </div>
                               
        </div>
        <div class="contenedorn">
            <div class="n1"><a class="btn btn-primary" href="/ReporteOtDes">Exportar pdf</a></div>
        </div>
    </div>
</div><!-- .animated -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/otdes/index.blade.php ENDPATH**/ ?>