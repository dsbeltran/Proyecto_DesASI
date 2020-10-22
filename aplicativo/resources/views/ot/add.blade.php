@extends('index')

@section('title', 'Oreden de Trabajo')

@section('content')

    <form method="POST" action="/Oreden_detrabajo">
        @csrf
        <h2>Añadir Oreden de Trabajo</h2>
        <label for="ord_id">Orden ID:</label><br>
        <input placeholder="Ingrese Orden ID" name="ord_id" type="text"><br><br>
        <label for="emp_id">Empleado ID:</label><br>
        <input placeholder="Ingrese Empleado ID" name="emp_id" type="text"><br><br>
        <label for="est_id">Estandar ID:</label><br>
        <input placeholder="Ingrese Estandar ID" name="est_id" type="text"><br><br>
        <label for="ord_fecha_ini">Fecha Inico:</label><br>
        <input placeholder="Ingrese Fecha Inico" name="ord_fecha_ini" type="text"><br><br>
        <label for="ord_fecha_fin">Fecha Fin:</label><br>
        <input placeholder="Ingrese Fecha Fin" name="ord_fecha_fin" type="text"><br><br>

        <button type="submit">Guardar</button>
        <a href="{{url('/Oreden_detrabajo')}}">Cancelar</a>
    </form>
@endsection