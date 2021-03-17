@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">    <form action="{{route('empleadocrear')}}" method="post">
            @method("POST")
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary ">Guardar</button>
                </div>
            </div>
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            @endif
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre" value="{{old('nombre')}}">
                <small class="text-danger">{{$errors->first('nombre')}}</small>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad" value="{{old('edad')}}">
                <small class="text-danger">{{$errors->first('edad')}}</small>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion" rows="2" value="{{old('direccion')}}">
                <small class="text-danger">{{$errors->first('direccion')}}</small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese un email" value="{{old('email')}}">
                <small class="text-danger">{{$errors->first('email')}}</small>
            </div>
            <div class="form-group">
                <label for="idCargo">Cargo</label>
                <select class="form-control" name="idCargo" id="idCargo">
                    @forelse($cargos as $cargo)
                        <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                    @empty
                </select>

                <option>No existen</option>
                @endforelse

            </div>

        </form>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
