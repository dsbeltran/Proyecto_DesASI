@extends('index')

@section('title', 'Mostrar Producto')

@section('content')
    <form method="POST"action="{{ route('c.show', $clientes->$)}}">
        @csrf
        @method('PUT')
        <h4>{{$clientes->cli_nombreyapellido}}</h4>
        <h4>{{$clientes->cli_direccion}}</h4>
        <h4>${{$clientes->cli_telefono}}</h4>
    </form>
@endsection
<!--        @csrf
        <h2>Mostrar Producto</h2>
        <h3>Nombre:</h3>
        <h4>{{$clientes->cli_nombreyapellido}}</h4>
        <h3>Descripcion:</h3>
        <h4>{{$clientes->cli_direccion}}</h4>
        <h3>Precio:</h3>
        <h4>${{$clientes->cli_telefono}}</h4>
        <a href="{{url('/Cliente')}}">Cancelar</a>--!>