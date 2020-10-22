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
        <h1>Estandares de Produccion</h1>
        <p>A continuacion se despiga un reporte donde se encuetra toda la informacion de todos los Estandares de Produccion registrados</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Estandar ID</th>
                        <th scope="col">Maquinaria ID</th>
                        <th scope="col">Materia prima ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estandar_de_produccions $estandar_de_produccion)
                    <tr>
                        <th scope="row">{{$estandar_de_produccion->est_id}}</th>
                            <td>{{$estandar_de_produccion->mez_id}}</td>
                            <td>{{$estandar_de_produccion->qui_id}}</td>
                            <td>{{$estandar_de_produccion->est_nombre}}</td>
                            <td>{{$estandar_de_produccion->est_descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>