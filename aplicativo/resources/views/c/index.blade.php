@extends('index')

@section('title', 'Cliente')
<link rel="stylesheet" href="assets/css/Estilo_PI_Sesion.css">
<link rel="stylesheet" href="assets/css/Estilo_PI_Cliente.css">
@section('content')
    <div class="content">
    <div class="animated fadeIn">
        <div class="caja">
            <div class="contenedor">
                
                <div class="c">
                    <div class="foto">
                        <img src="assets/images/Imagen_no_disponible.svg.png"  alt="ISABELLA"/>
                    </div>
                    <div class="c1" aling="center">
                        <h1>Nombre:</h1>
                        <h2>Descripcion</h2>
                    </div>
                </div>
            </div>
            <div class="contenedor">
                <div class="e2">            
                    <ul class="navs">
                        <li><a class="active" href="{{url('/Cliente')}}">Ver</a></li>
                        <li><a href="{{url('/Cliente/create')}}">Crear</a></li>
                    </ul>
                </div>
            </div>
            <div class="contenedorn">
                <div class="n">
                <table class="table">
	                <thead class="thead-dark">
                        <tr>
                           <td>ID</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Telefono</td>
                        </tr>        
	                </thead>
	                <tbody>
                        @foreach ($Cliente as $Cliente)
                        <tr>
                        <td><center>{{$Cliente->cli_id}}</center></td>
                        <td><center>{{$Cliente->cli_nombreyapellido}}</center></td>
                        <td><center>{{$Cliente->cli_direccion}}</center></td>
                        <td><center>{{$Cliente->cli_telefono}}</center></td>

                    </tr>
                        @endforeach
            	    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="contenedorn">
                <div class="n1"><a class="btn btn-primary" href="/ReporteC">Exportar pdf</a></div>
            </div>
            

        </div>
    </div>
</div>

@endsection