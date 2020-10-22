@extends('index')

@section('title', 'Añadir Estandar de Produccion')

@section('content')

    <form method="POST" action="/Estandar_de_produccion">
        @csrf
        <h2>Añadir Estandar de Produccion</h2>
        <label for="est_id">Estandar ID:</label><br>
        <input placeholder="Ingrese Estandar ID" name="est_id" type="text"><br><br>
        <label for="mez_id">Maquinaria ID:</label><br>
        <input placeholder="Ingrese Maquinaria ID" name="mez_id" type="text"><br><br>
        <label for="qui_id">Materia prima ID:</label><br>
        <input placeholder="Ingrese Materia prima ID" name="qui_id" type="text"><br><br>
        
        <label for="est_nombre">Nombre:</label><br>
        <input placeholder="Ingrese Nombre" name="est_nombre" type="text"><br><br>
        <label for="est_descripcion">Descripción:</label><br>
        <textarea placeholder="Ingrese Descripción" name="qui_id" rows="4"></textarea><br><br>
        
        <button type="submit">Guardar</button>
        <a href="{{url('/Estandar_de_produccion')}}">Cancelar</a>
    </form>
@endsection