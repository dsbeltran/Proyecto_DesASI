@extends('index')

@section('title', 'Añadir Venta')

@section('content')

    <form method="POST" action="/Venta">
        @csrf
        <h2>Añadir Venta</h2>
        <label for="ven_id">Venta ID:</label><br>
        <input placeholder="Ingrese Venta ID" name="ven_id" type="text"><br><br>
        <label for="cli_id">Clinete Id:</label><br>
        <input placeholder="Ingrese Cliente ID" name="cli_id" type="text"><br><br>
        <label for="emp_id">Empleado ID:</label><br>
        <input placeholder="Ingrese Empleado ID" name="emp_id" type="text"><br><br>
        <label for="ven_fecha">Fecha:</label><br>
        <input placeholder="Ingrese Fecha" name="ven_fecha" type="text"><br><br>
        <label for="ven_fechaentrega">Fecha de Entrega:</label><br>
        <input placeholder="Ingrese Fecha de Entrega" name="ven_fechaentrega" type="text"><br><br>
        
        <button type="submit">Guardar</button>
        <a href="{{url('/Ventas')}}">Cancelar</a>
    </form>
@endsection