@extends('index')

@section('title', 'Añadir Maquinaria')

@section('content')
    <form method="POST" action="/Maquinaria">
        @csrf
        <h2>Añadir Maquinaria</h2>
        <label for="mez_id">Maquinaria Id:</label><br>
        <input placeholder="Ingrese id" name="mez_id" type="text"><br><br>
        <label for="mez_descripcion">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="mez_descripcion" rows="4"></textarea><br><br>
        <label for="mez_tiemp">Tiempo:</label><br>
        <input placeholder="Ingrese Tiempo" name="mez_tiemp" type="text"><br><br>
        <label for="mez_nombre">Nombre:</label><br>
        <input placeholder="Ingrese Nombre" name="mez_nombre" type="text"><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Maquinaria')}}">Cancelar</a>
    </form>
@endsection