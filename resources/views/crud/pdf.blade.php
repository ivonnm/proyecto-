<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hola soy el reporte
    <table class="table table-dark">
        <thead class="thead-light">
            <tr>

                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido MAterno</th>
                <th>Direccion</th>
                <th>Nivel</th>
                <th>Horario</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>Dias</th>
                <th>Correo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $registro )
            <tr>


                <td>
                    <img src="{{ asset('storage').'/'.$registro->fotografia }}" alt="">

                </td>

                <td>{{ $registro->nombre }}</td>
                <td>{{ $registro->apellidoP }}</td>
                <td>{{ $registro->apellidoM }}</td>
                <td>{{ $registro->direccion }}</td>
                <td>{{ $registro->nivel }}</td>
                <td>{{ $registro->horario }}</td>
                <td>{{ $registro->telefono }}</td>
                <td>{{ $registro->edad }}</td>
                <td>{{ $registro->dias }}</td>
                <td>{{ $registro->correo }}</td>


            </tr>


            @endforeach
        </tbody>
    </table>
</body>
</html>
