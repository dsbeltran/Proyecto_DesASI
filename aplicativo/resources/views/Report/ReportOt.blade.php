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
<h1>Oreden de Trabajo</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de toda las Oredenes de Trabajo registradas</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Orden ID</th>
                        <th scope="col">Empleado ID</th>
                        <th scope="col">Estandar ID</th>
                        <th scope="col">Fecha Inico</th>
                        <th scope="col">Fecha Fin</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Oreden_detrabajos as $Oreden_detrabajo)
                    <tr>
                        <th scope="row">{{$Oreden_detrabajo->ord_id}}</th>
                            <td>{{$Oreden_detrabajo->emp_id}}</td>
                            <td>{{$Oreden_detrabajo->est_id}}</td>
                            <td>{{$Oreden_detrabajo->ord_fecha_ini}}</td>
                            <td>{{$Oreden_detrabajo->ord_fecha_fin}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>