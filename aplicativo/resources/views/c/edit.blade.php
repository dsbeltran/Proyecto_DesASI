@extends('index')

@section('title', 'Editar Producto')

@section('content')
    <form method="POST" action="/Cliente/{{$cliente->cli_id}}">
        @method('PUT')
        <h2>Editar Cliente</h2>
        <label for="cli_id">Cliente Id:</label><br>
        <input placeholder="Ingrese id" name="cli_id" type="text" value="{{$clientes->cli_id}}"><br><br>

        <label for="cli_nombreyapellido">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="cli_nombreyapellido" type="text" value="{{$clientes->cli_id}}"><br><br>

        <label for="cli_direccion">Descripcion:</label><br>
        <textarea placeholder="Ingrese direccion" name="cli_direccion" rows="4">{{$clientes->cli_direccion}}</textarea><br><br>

        <label for="cli_telefono">Precio:</label><br>
        <input placeholder="Ingrese telefono" name="cli_telefono" type="text" value="{{$clientes->cli_telefono}}"><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Cliente')}}">Cancelar</a>
    </form>