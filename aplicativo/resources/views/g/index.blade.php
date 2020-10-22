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
                                    @foreach ($gerentes as $gerente)
                                        <tr>
                                            <td><center>{{$gerente->ger_id}}</center></td>
                                            <td><center>{{$gerente->ger_nombre}}</center></td>
                                            <td><center>{{$gerente->ger_depar}}</center></td>
                                        </tr>
                                    @endforeach
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

@endsection