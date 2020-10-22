@extends('index')

@section('title', 'Añadir Cliente')

@section('content')
    <form method="POST" action="/Cliente">
        @csrf
        <h2>Añadir Cliente</h2>
        <label for="cli_id">Cliente Id:</label><br>
        <input placeholder="Ingrese id" name="cli_id" type="text"><br><br>
        <label for="cli_nombreyapellido">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="cli_nombreyapellido" type="text"><br><br>
        <label for="cli_direccion">Direccion:</label><br>
        <textarea placeholder="Ingrese direccion" name="cli_direccion" rows="4"></textarea><br><br>
        <label for="cli_telefono">Telefono:</label><br>
        <input placeholder="Ingrese telefono" name="cli_telefono" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Cliente')}}">Cancelar</a>
    </form>
@endsection