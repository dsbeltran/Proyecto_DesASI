@extends('index')

@section('title', 'Venta')
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
                    <h1>Venta</h1>
                </div>
        </div>
        <div  class="contenedor">
            <div class="n">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <td>Venta ID</td>
                            <td>Cliente ID</td>
                            <td>Empleado ID</td>
                            <td>Fecha </td>
                            <td>Fecha de Entrega</td>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($venta as $venta)
                            <tr>

                                <td><center>{{$venta->ven_id}}</center></td>
                                <td><center>{{$venta->cli_id}}</center></td>
                                <td><center>{{$venta->emp_id}}</center></td>
                                <td><center>{{$venta->ven_fecha}}</center></td>
                                <td><center>{{$venta->ven_fechaentrega}}</center></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contenedorn">
            <div class="n1"><a class="btn btn-primary" href="/ReporteV">Exportar pdf</a></div>
        </div>
    </div>
</div>
@endsection