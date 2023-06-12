<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>GENERAR REPORTE PDF</title>

    <style>
        .header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 600px;
        }

    </style>
</head>

<body>
    <div class="header">
        <img src="https://cdn.inclusionfinanciera.gob.sv/wp-content/uploads/2021/05/MicrosoftTeams-image-8-1024x418.png">
        <h2>Gobierno de El Salvador</h2>
        <h3>Secretaria de Innovación</h3>
        <p>Fecha: {{ date('Y-m-d') }}</p>
    </div>
    <hr>
    <h3>Reporte de proyectos.</h3>
    <hr>
    <table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fuente de fondos</th>
            <th scope="col">Monto planificado</th>
            <th scope="col">Monto patrocinado</th>
            <th scope="col">Monto fondos propios</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->NombreProyecto }}</td>
            <td>{{ $proyecto->FuenteFondos }}</td>
            <td>{{ $proyecto->MontoPlanificado }}</td>
            <td>{{ $proyecto->MontoPatrocinado }}</td>
            <td>{{ $proyecto->MontoFondosPropios }}</td>
            <td><a href="#">Detalles</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>