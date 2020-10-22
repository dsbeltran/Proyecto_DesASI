@extends('index')

@section('title', 'Gerente')
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Gerente.css">
</head>
@section('content')
<div class="content">
            <div class="animated fadeIn">
                <div class="caja">

                    <div class="contenedor">
                        <div class="c">
                            <div class="foto">
                                <img src="images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                            </div>
                            <div class="c1" aling="center">
                                <h1>Gerente Ventas</h1>
                                <h2>Nombre:</h2>
                                <h3>Descripcion</h3>
                            </div>
                        </div>
                    </div>
                    <div class="contenedorn">
                        <div class="n">
                            <ul class="horizontalgray">
                                <li><a href="">Ventas</a></li>
                                <li><a href="">Ganancias</a></li>
                                <li><a href="">Productos</a></li>
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

                  </div>

            </div><!-- .animated -->
        </div>
@endsection
<!doctype html>
<html>