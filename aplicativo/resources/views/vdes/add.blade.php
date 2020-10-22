@extends('index')

@section('title', 'Añadir Venta Descripcion')

@section('content')

    <form method="POST" action="/Venta_descripcion">
        @csrf
        <h2>Añadir Venta Descripcion</h2>
        <label for="vdes_id">Venta Descripción ID:</label><br>
        <input placeholder="Venta Descripción ID" name="vdes_id" type="text"><br><br>
        <label for="ven_id">Venta ID:</label><br>
        <input placeholder="Venta ID" name="ven_id" type="text"><br><br>
        <label for="pro_id">Producto ID:</label><br>
        <input placeholder="Producto ID" name="pro_id" type="text"><br><br>
        <label for="vdes_precio">Precio:</label><br>
        <input placeholder="Ingrese Precio" name="vdes_precio" type="text"><br><br>
        <label for="vdes_des">Descripción:</label><br>
        <textarea placeholder="Ingrese Descripción" name="vdes_des" rows="4"></textarea><br><br>
        
        <button type="submit">Guardar</button>
        <a href="{{url('/Venta_descripcion')}}">Cancelar</a>
    </form>
@endsection