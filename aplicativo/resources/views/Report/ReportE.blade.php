<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
            <h1>Empleados</h1>
            <p>Acontinuacion se despiga un reporte donde se encuetra toda la informacion de todos los Empleados registrados</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Gerente_id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Empleados as $empleado)
                    <tr>
                        <th scope="row">{{$empleado->emp_id}}</th>
                            <td>{{$empleado->emp_nombreyapellido}}</td>
                            <td>{{$empleado->empl_direccion}}</td>
                            <td>{{$empleado->ger_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
</body>
</html>