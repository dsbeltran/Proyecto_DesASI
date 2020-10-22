@extends('index')

@section('title', 'Añadir Gerente')

@section('content')

    <form method="POST" action="/Gerente">
        @csrf
        <h2>Añadir Gerente</h2>
        <label for="ger_id">Gerente Id:</label><br>
        <input placeholder="Ingrese id" name="ger_id" type="text"><br><br>
        <label for="ger_nombre">Nombre:</label><br>
        <input placeholder="Ingrese nombre" name="ger_nombre" type="text"><br><br>
        <label for="ger_depar">Departamento:</label><br>
        <textarea placeholder="Ingrese Departamento" name="ger_depar" rows="4"></textarea><br><br>
        <button type="submit">Guardar</button>
        <a href="{{url('/Gerente')}}">Cancelar</a>

    </form>
@endsection