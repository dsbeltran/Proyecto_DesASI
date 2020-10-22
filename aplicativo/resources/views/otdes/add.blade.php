@extends('index')

@section('title', 'Añadir Oreden Descripcion')

@section('content')

    <form method="POST" action="/Oreden_detrabajodescrip">
        @csrf
        <h2>Añadir Oreden Descripcion</h2>
        <label for="odes_id">O Descrip ID:</label><br>
        <input placeholder="Ingrese Orden Descrip ID" name="odes_id" type="text"><br><br>
        <label for="pro_id">Producto ID:</label><br>
        <input placeholder="Ingrese Producto ID" name="pro_id" type="text"><br><br>
        <label for="ord_id">Oreden ID:</label><br>
        <input placeholder="Ingrese Oreden ID" name="ord_id" type="text"><br><br>
        <label for="odes_desc">Descripcion:</label><br>
        <textarea placeholder="Ingrese Descripcion" name="odes_desc" rows="4"></textarea><br><br>

        <button type="submit">Guardar</button>
        <a href="{{url('/Oreden_detrabajodescrip')}}">Cancelar</a>
    </form>
@endsection