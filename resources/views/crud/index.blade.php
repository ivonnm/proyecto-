
@extends('layouts.app')

@section('content')
<div class="container">

    <a class="btn btn-primary" href="{{url('/home')}}">Regresar</a>
    <a href="{{ route('crud.pdf')}}" class="btn btn-primary btn-sm" data-placement="left" >
    {{_('PDF')}}
    </a>

    <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>#</th>
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro )


            <tr>
                <td>{{ $registro->id }}</td>

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
                <td>

                    <a href="{{ url('/registros/'.$registro->id.'/edit')}}" class="btn btn-warning">


                       Editar
                    </a>
                    |
                    <a href="" class="btn btn-warning">


                       Enviar Correo
                     </a>

                    |

                    <form action="{{ url('/registros/'.$registro->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar el registro?')"
                        value="Borrar">

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>
    </table>
{!! $registros->links() !!}


@endsection
