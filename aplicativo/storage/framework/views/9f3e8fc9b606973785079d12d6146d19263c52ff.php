

<?php $__env->startSection('title', 'Maquinaria'); ?>
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Produc.css">
</head>

<?php $__env->startSection('content'); ?>
<div class="animated fadeIn">
    <div class="caja">
        <div class="contenedor">
            <div class="c" style="padding: 30px">
                <h1>Maquinaria</h1>
            </div>
        </div>
        <div class="contenedornav">
            <div class="flex-container">
                    <div class="g1">
                        <div class="h">
                            <div class="fotos">
                                <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                            </div>
                            <div class="boton">
                                <div class="op">
                                    <p class="ops">Nombre</p>
                                </div>
                                <div class="op  ">
                                    <button class="button button2">Comprar</button>
                                </div>
                            </div>                                    
                        </div>
                    </div>
                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="h">
                                        <div class="fotos">
                                            <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                                        </div>
                                        <div class="boton">
                                            <div class="op">
                                                <p class="ops">Nombre</p>
                                            </div>
                                            <div class="op  ">
                                                <button class="button button2">Comprar</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
            </div>
        </div>
        <div class="contenedorn">
            <div class="n">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                            <td>ID</td>
                            <td>Descripcion</td>
                            <td>Tiempo de uso</td>
                            <td>Nombre</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $maquinaria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maquinaria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                <td><center><?php echo e($maquinaria->mez_id); ?></center></td>
                                <td><center><?php echo e($maquinaria->mez_descripcion); ?></center></td>
                                <td><center><?php echo e($maquinaria->mez_tiemp); ?></center></td>
                                <td><center><?php echo e($maquinaria->mez_nombre); ?></center></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table> 
            </div>
        </div>
        <div class="contenedorn">
            <div class="n1"><a class="btn btn-primary" href="/ReporteMq">Exportar pdf</a></div>
        </div>  
    </div>
</div>

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\david\Desktop\Proyecto_II\aplicativo\resources\views/mq/index.blade.php ENDPATH**/ ?>