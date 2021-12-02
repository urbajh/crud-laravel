@extends('layouts.app')

@section('content')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

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