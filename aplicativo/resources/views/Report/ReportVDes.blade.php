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
<h1>Venta Descripcion</h1>
<p>A continuacion se despiga un reporte donde se encuetra toda la informacion de todas las Ventas con su respectiva Descripcion registradas</p>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Venta Descripción ID</th>
                        <th scope="col">Venta ID</th>
                        <th scope="col">Producto ID</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Venta_descripcions as $Venta_descripcions)
                    <tr>
                        <th scope="row">{{$Venta_descripcions->vdes_id}}</th>
                            <td>{{$Venta_descripcions->ven_id}}</td>
                            <td>{{$Venta_descripcions->pro_id}}</td>
                            <td>{{$Venta_descripcions->vdes_precio}}</td>
                            <td>{{$Venta_descripcions->vdes_des}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>