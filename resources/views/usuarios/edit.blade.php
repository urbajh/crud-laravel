@extends('layouts.app')

@section('content')
<div class='container pt-4'>
    <a class='btn btn-secondary my-3' href="/usuario/{{$usuario->id}}">Volver</a>
    <h1>Editar Usuario</h1>
    {!! Form::open(['url' => ['/usuario' , $usuario->id], 'method' => 'PUT']) !!}
    {{Form::bsText('nombre',$usuario->nombre,['required'])}}
    {{Form::bsText('email',$usuario->email,['required'])}}
    {{Form::bsText('telefono',$usuario->telefono,['required'])}}
    {{Form::bsSubmit('Editar',['class' => 'btn btn-success btn-lg float-right'])}}
    {!! Form::close() !!}
</div>
    
@endsection