@extends('layouts.app')

@section('content')

    <h1 class='pt-5'>Crear Usuario</h1>
    {!! Form::open(['url' => '/usuario/', 'method' => 'POST']) !!}
    {{Form::bsText('nombre','',['required'])}}
    {{Form::bsText('email','',['required'])}}
    {{Form::bsText('telefono','',['required'])}}
    {{Form::bsSubmit('Enviar',['class' => 'btn btn-success btn-lg float-right'])}}
    {!! Form::close() !!}

@endsection