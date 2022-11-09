@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center"><font color="royalblue">Llenar formulario</font></h1>

@if(session()->has('confirmacion'))
    {!! "<script>Swal.fire('Listo', 'Tu recuerdo llego al controlador', 'success'</script>"!!}
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
    </div>
@endif

<h1 class="mt-4 display-1 text-center">Ingresar datos</h1>
<br>
<div class="container mt-5 cool-md-6">
    <div>
        <div class="text-center">
            Consulta <i class="bi bi-wechat"></i>
        </div>

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario Incompleto!</strong>{{$error}}
            <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>     
        </div>
        @endforeach
    @endif

    <div>
        <form method="post" action="consulta">
            @csrf
            <div>
                <label class="form-label" name="labelUsuario">Usuario: </label>   
                <input type="text" class="form-control" name="txtUsuario" value="{{ old('txtUsuario')}}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtUsuario')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelComputadora">No.Computadora: </label>   
                <input type="text" class="form-control" name="txtComputadora" value="{{ old('txtComputadora')}}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtComputadora')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelTiempo">Tiempo: </label>   
                <input type="text" class="form-control" name="txtTiempo" value="{{ old('txtTiempo')}}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtTiempo')}}</p>
            </div>

            <div>
                <label class="form-label" name="labelFecha">Fecha: </label>   
                <input type="text" class="form-control" name="txtFecha" value="{{ old('txtFecha')}}"></input>
                <p class="fw-hold text-danger"> {{$errors->first('txtFecha')}}</p>
            </div>
    </div>
  
    <div>
        <button type="submit" name="btnGuardar">Guardar</button>
    </div>   
        </form>

    </div>
</div>    
<br>

@stop
