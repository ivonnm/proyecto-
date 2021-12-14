@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Editar formulario</h1>
    <a class="btn btn-primary" href="{{url('/crud/index')}}">Regresar</a>
<form action="{{ url('/registros/'.$registro->id) }}" method="post" enctype="multipart/form-data">
@csrf
    {{ method_field('PATCH') }}
@include('crud.form');
</form>
</div>
@endsection
