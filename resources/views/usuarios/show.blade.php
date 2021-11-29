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
            <button class='btn btn-warning w-50 border border-dark'>Editar</button>
        </div>

@endsection