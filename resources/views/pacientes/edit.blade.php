@extends('inicio')
@section('main')
<div class="container">
    <h5 class="h5Add">EDIT RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/pacientes/{{$paciente->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">DNI</label>
            <input type="number" class="form-control" id="dni" name="dni" value="{{ $paciente->dni }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $paciente->apellido }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Domicilio</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $paciente->domicilio }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $paciente->telefono }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Historia clinica</label>
            <input type="text" class="form-control" id="historia_clinica" name="historia_clinica" value="{{ $paciente->historia_clinica }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento" value="{{ $paciente->fecha_de_nacimiento }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection