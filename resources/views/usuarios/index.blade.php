@extends('layouts.app')

@section('content')

<h1 class='p-5'>Usuarios</h1>
@if(count($usuarios)>0)
    @foreach($usuarios as $usuario)

        <div class="card">
            <div class="card-body">
                <h4> 
                    <a href="usuario/{{$usuario->id}}">
                        {{$usuario->nombre}}
                    </a>
                </h4>
            </div>
        </div>

    @endforeach
@endif

@endsection