@extends('layouts.app')

@section('content')

<div class="card m-5 p-4">
    <div class="card-body">
            <h5 class='card-title'>Mostrando datos de: {{$usuario->nombre}}</h5>
                <ul>
                    <li>Email: {{$usuario->email}}</li> 
                    <li>Telefono: {{$usuario->telefono}} </li>
                    <li>Fecha de creacion: {{$usuario->created_at}}</li>
                </ul>
            </div>
            <div class='d-flex justify-content-around'>
                <a  href='/usuario/{{$usuario->id}}/edit'>
                    <button class='btn btn-warning btn-lg border border-dark'>Editar</button>
                    
                </a>
                {!! Form::open(['url' => ['/usuario' , $usuario->id], 'method' => 'DELETE']) !!}
                {{Form::bsSubmit('Eliminar',['class' => 'btn btn-danger btn-lg float-right border-dark '])}}
                {!! Form::close() !!}
            </div>
        </div>

@endsection