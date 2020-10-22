@extends('index')

@section('title', 'Venta Descripción')
<head>
    <link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
    <link rel="stylesheet" href="assets/css/Estilo_PI_FacturaCompra.css">
</head>
@section('content')
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
                <h1>Factura</h1>
                </div>
                <div class="e2">
                <div>Numero de la factura: </div>
                <div>Fecha de la factura: </div>
                <div>Fecha de Entrega:</div>
                
                </div>
                </div>
            </div>
            <div class="e">
                <table class="table">
                <thead class="thead-dark">
                <tr>
                <td>Venta Descripción ID</td>
                <td>Venta ID</td>
                <td>Producto ID</td>
                <td>Precio</td>
                <td>Descripción</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($venta_descripcion as $venta_descripcion)
                <tr>
                    
                    <td><center>{{$venta_descripcion->vdes_id}}</center></td>
                    <td><center>{{$venta_descripcion->ven_id}}</center></td>
                    <td><center>{{$venta_descripcion->pro_id}}</center></td>
                    <td><center>{{$venta_descripcion->vdes_des}}</center></td>
                    <td><center>{{$venta_descripcion->vdes_precio}}</center></td>
                </tr>
                @endforeach
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
                </div>
                </div>
                <div class="e2">
                <div class="e">
                <div class="e">
                Subtotal   
                </div>
                <div class="e">
                0,00$
                </div>
                </div>
                <div class="e">
                <div class="e">
                Descuento   
                </div>
                <div class="e">
                0,00$
                </div>  
                </div>
                <div class="e">
                <div class="e">
                IVA 12%   
                </div>
                <div class="e">
                0,00$
                </div> 
                </div>
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
            <div class="n1"><a class="btn btn-primary" href="/ReporteVDes">Exportar pdf</a></div>
        </div>
    </div>
</div>
@endsection