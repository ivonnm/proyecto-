@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"  style="background-color:rgba(255, 255, 255, 0)">
            </div>

            <div class="col-lg-4"  style="background-color:rgba(91, 247, 247, 0.514)">
                <a style="text-align: center;
                font-family: Comic Sans MS;
                font-weight:bold;
                font-size: 30px;
                color: #0c7e9b;
                text-shadow: -1px 0 #ffffff, 0 1px #414d6880, 1px 0 #414d688f, 1px 1px 0 #414D68, 1px 1px #414D68, 2px 2px #414D68, 3px 3px #414D68, 2px 4px #414D68;
                " href="{{route('crud.index')}}" ><h1>Informacion Recibida</h1></a>
                <br>
                <p>Ingresa para ver los datos de los usuarios en espera de su credencial</p>
                <img src="img/credencial.jpg" alt="..."  style="height: 200px; width:200px;  margin: 75px;
                padding: 1px;
                border: black 2px solid;">
                <br>
            </div>

            <div class="col-lg-2"  style="background-color:rgba(255, 255, 255, 0)">
            </div>

            <div class="col-lg-4"  style="background-color:rgba(239, 241, 102, 0.411)">
                <a style="text-align: center;
                font-family: Comic Sans MS;
                font-weight:bold;
                font-size: 30px;
                color: #0c7e9b;
                text-shadow: -1px 0 #ffffff, 0 1px #414d6880, 1px 0 #414d688f, 1px 1px 0 #414D68, 1px 1px #414D68, 2px 2px #414D68, 3px 3px #414D68, 2px 4px #414D68;
                " href="{{route('crud.index')}}" ><h1>Credenciales existentes</h1></a>
                <br>
                <p>En este apartado se almacenan las credenciales que se han creado</p>
                <img src="img/ex.png" alt="..."  style="height: 200px; width:200px;  margin: 75px;
                padding: 1px;">
                <br>
            </div>
        </div>
    </div>
</div>


@endsection
