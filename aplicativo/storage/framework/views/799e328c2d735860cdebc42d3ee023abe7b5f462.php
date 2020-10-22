

<?php $__env->startSection('title', 'Gerente'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Gerente.css">
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
                                <h1>Gerente General</h1>
                                <h2>Nombre:</h2>
                                <h3>Descripcion</h3>
                            </div>
                        </div>
                    </div>
                    <div class="contenedorn">
                        <div class="n">
                            <ul class="horizontalgray">
                                <li><a href="">Ventas</a></li>
                                <li><a href="">Produccion</a></li>
                                <li><a href="">Ganancias</a></li>
                              </ul>
                        </div>
                    </div>
                    <div class="contenedorc">
                        <div class="o">
                            <div class ="estadisticos">
                                <h4 class="mb-3">Ganancias por año </h4>
                                <canvas id="sales-chart"></canvas>                                
                            </div>
                        </div>
                        <div class="oa">
                            <h3>Descripcion</h3>
                        </div>
                    </div>
                    <div class="contenedorc">
                        <div class="o">
                            <div class ="estadisticos">
                                <h4 class="mb-3">El equipo se compromete </h4>
                                <canvas id="team-chart"></canvas>
                            </div>
                        </div>
                        <div class="oa">
                            <h3>Descripcion</h3>
                        </div>
                    </div>
                    <div class="contenedorc">
                        <div class="o">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <td>ID</td>
                                        <td>Nombre</td>
                                        <td>Descripción</td>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $gerentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gerente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><center><?php echo e($gerente->ger_id); ?></center></td>
                                            <td><center><?php echo e($gerente->ger_nombre); ?></center></td>
                                            <td><center><?php echo e($gerente->ger_depar); ?></center></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>


                            </table>
                        </div>
                    </div>
                    <div class="contenedorn">
                        <div class="n1"><a class="btn btn-primary" href="/ReporteG">Exportar pdf</a></div>
                    </div>


                  </div>

            </div><!-- .animated -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/g/index.blade.php ENDPATH**/ ?>