<!-- si hay error muestra el error-->

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class='alert alert-danger'>
        {{$error}}
    </div>
    @endforeach
@endif

<!-- si todo va bien muestra el success-->


@if(session('success'))
    <div class='alert alert-success'>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class='alert alert-danger'>
        {{session('error')}}
    </div>
@endif