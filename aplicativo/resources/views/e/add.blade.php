@extends('index')

@section('title', 'Añadir Empleados')

@section('content')
    
    <form method="POST" action="/Empleado">
        @csrf
        <h2>Añadir Empleados</h2>
        <label for="emp_id">Empleados Id:</label><br>
        <input placeholder="Ingrese id" name="emp_id" type="text"><br><br>
        <label for="emp_nombreyapellido">Nombre:</label><br>
        <input placeholder="Ingrese Nombre y Apellido" name="emp_nombreyapellido" type="text"><br><br>
        <label for="empl_direccion">Direccion:</label><br>
        <textarea placeholder="Ingrese direccion" name="empl_direccion" rows="4"></textarea><br><br>
        <label for="ger_id">Gerente_id:</label><br>
        <input placeholder="Ingrese ID" name="ger_id" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Empleado')}}">Cancelar</a>
    </form>
@endsection