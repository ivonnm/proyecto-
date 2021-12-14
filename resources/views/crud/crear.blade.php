@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h1 class="text-center display-3">Crea tu registro</h1>
        <form action="{{route('crud.store')}}" method="POST">
            @csrf
            @method('put')

            <label for="fotografia">fotografia</label>

            <input type="file" class="form-control" name="fotografia" id="fotografia"/>
            <br>
            <label for="nombre">Nombre</label>
            <input type="text"  class="form-control" name="nombre"/>
            <br>
            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidoP"/>
            <br>
            <label for="apellidoMaterno">Apellido Materno</label>
            <input type="text"  class="form-control" name="apellidoM" />
            <br>
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" placeholder="1234 Main St"  />

            <br>
            <label for="nivel" class="form-label">Nivel</label>
            <input type="text" class="form-control" name="nivel" placeholder="avanzado" />

           <!-- <select class="form-select" aria-label="Default select example" name="nivel">
                <option selected value="">Nivel</option>
                <option value="1">Adaptacion </option>
                <option value="2">Crowl</option>
                <option value="3">Dorso</option>
                <option value="4">Intermedio</option>
                <option value="4">Avanzado</option>
              </select>
            -->
            <br>
            <label for="horario" class="form-label">Horario</label>
            <input type="text" class="form-control" name="horario" placeholder="8:00 am - 10:00 am" />

        <!--  <select class="form-select" aria-label="Default select example" name="horario">
                <option selected value="">Horario</option>
                <option value="1">7:00 am - 8:00 am </option>
                <option value="2">7:00 am - 9:00 am</option>
                <option value="3">9:00 am - 10:00 am</option>
                <option value="4">9:00 am - 11:00 am </option>
                <option value="5">10:00 am  - 11:00 am</option>
                <option value="7">10:00 am - 12:00 pm</option>
                <option value="8">2:00 pm - 3:00 pm </option>
                <option value="9">3:00 pm - 4:00 pm</option>
                <option value="10">5:00 pm - 6:00 pm</option>
                <option value="11">6:00 pm - 7:00 pm </option>
                <option value="12">7:00 pm - 8:00 pm</option>
                <option value="13">8:00 pm - 9:00 pm</option>

              </select>
            <br>-->

            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" />
            <br>
            <label for="edad">Edad</label>
            <input type="tel" class="form-control" name="edad"/>
            <br>

         <!--  <select class="form-select" aria-label="Default select example" name="edad">
                <option selected value="">Edad</option>
                <option value="1">8</option>
                <option value="2">9</option>
                <option value="3">10</option>
                <option value="4">11</option>
                <option value="5">12</option>
                <option value="7">13</option>
                <option value="8">14</option>
                <option value="9">15</option>
                <option value="10">16</option>
                <option value="11">17</option>
                <option value="12">18</option>
                <option value="13">19</option>
                <option value="14">20</option>
                <option value="15">21</option>
                <option value="16">22</option>
                <option value="17">23</option>
                <option value="18">24</option>
                <option value="19">25</option>
                <option value="20">26</option>

              </select>

            <br>-->
            <br>
            <label for="dias">Dias de clases </label>
            <input type="text"  class="form-control" name="dias"/>
            <br>
        <!--<select class="form-select" aria-label="Default select example" name="dias">
                <option selected value="">Dia de clases</option>
                <option value="1">Lunes, Martes y Jueves</option>
                <option value="2">Lunes, Miercoles, Viernes</option>
                <option value="3">Lunes y Martes</option>
                <option value="4">Lunes y Miercoles</option>
                <option value="5">Lunes y jueves</option>
                <option value="7">Lunes y Viernes</option>
                <option value="8">Lunes, Miercoles, Jueves y sabado</option>
                <option value="9">Martes y jueves</option>
                <option value="10">Martes y viernes</option>
                <option value="11">Martes y sabado</option>
                <option value="12">Miercoles y jueves</option>
                <option value="13">Miercoles y Lunes</option>


              </select>-->
            <br>
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="correo" placeholder="name@example.com" >

            <br>
            <button class="btn btn-success" type="submit">Guardar Datos</button>

        </form>


        </div>
</div>

@endsection
