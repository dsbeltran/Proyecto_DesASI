@extends('index')

@section('title', 'Oreden de Trabajo')
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Produc.css">
</head>

@section('content')
<div class="animated fadeIn">
        <div class="caja">
                <div class="contenedor">
                        <div class="c" style="padding: 30px">
                        <h1>Orden de Trabajo</h1>
                        </div>
                </div>
                <div class="contenedorn">
                <div class="n">
                        <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                <td>Orden ID</td>
                                <td>Empleado ID</td>
                                <td>Estandar ID</td>
                                <td>Fecha Inico</td>
                                <td>Fecha Fin</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($oreden_detrabajo as $oreden_detrabajo)
                                        <tr>
                                        <td><center>{{$oreden_detrabajo->ord_id}}</center></td>
                                        <td><center>{{$oreden_detrabajo->emp_id}}</center></td>
                                        <td><center>{{$oreden_detrabajo->est_id}}</center></td>
                                        <td><center>{{$oreden_detrabajo->ord_fecha_ini}}</center></td>
                                        <td><center>{{$oreden_detrabajo->ord_fecha_fin}}</center></td>
                                        </tr>
                                @endforeach
                                </tbody>
                        </table>
                </div>
                </div>
                <div class="contenedorn">
                        <div class="n1"><a class="btn btn-primary" href="/ReporteOt">Exportar pdf</a></div>
                </div>
        </div>
</div>

@endsection