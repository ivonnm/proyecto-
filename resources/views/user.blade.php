@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="container">
            <a href="{{route('crud.crear')}}" ><h5>Crear Un nuevo registro</h5></a>

            <table class="table table-dark table-striped mt-4">
                <img src="img/fo.jpg" alt="..."  style="height: 350px; width:500px;  margin:5px;
                padding: 1px;
                ">

            </table>
        </div>
        </div>
    </div>
</div>
@endsection
