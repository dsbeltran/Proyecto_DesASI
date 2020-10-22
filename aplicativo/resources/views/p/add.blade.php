@extends('index')

@section('title', 'Añadir Productos')

@section('content')
    <form method="POST" action="/Producto">
        @csrf
        <h2>Añadir Productos</h2>
        <label for="pro_id">Producto Id:</label><br>
        <input placeholder="Ingrese id" name="pro_id" type="text"><br><br>

        <label for="pro_nombre">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="pro_nombre" type="text"><br><br>

        <label for="pro_pvp">Precio de venta al publico:</label><br>
        <input placeholder="Ingrese Precio de venta al publico" name="pro_pvp" type="text"><br><br>

        <label for="pro_pvadistri">Precio al por mayor:</label><br>
        <input placeholder="Ingrese Precio al por mayor" name="pro_pvadistri" type="text"><br><br>

        <label for="pro_descripcion">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="pro_descripcion" rows="4"></textarea><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Producto')}}">Cancelar</a>
    </form>
@endsection