@extends('index')

@section('title', 'Materia Prima')

@section('content')

    <form method="POST" action="/Materia_prima">
        @csrf
        <h2>Añadir Materia Primas</h2>
        <label for="qui_id">Materia Prima Id:</label><br>
        <input placeholder="Ingrese id" name="qui_id" type="text"><br><br>

        <label for="qui_nombre">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="qui_nombre" type="text"><br><br>

        <label for="qui_descrip">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="qui_descrip" rows="4"></textarea><br><br>

        <label for="qui_preciocompra"> Precio:</label><br>
        <input placeholder="Ingrese Precio" name="qui_preciocompra" type="text"><br><br>

        <button type="submit">Guardar</button>
        <a href="{{url('/Materia_prima')}}">Cancelar</a>
    </form>
@endsection