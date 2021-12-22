@extends('inicio')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/medicos">Medicos</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar</li>
    </ol>
    </nav>
    <h5 class="h5Add">EDIT RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/medicos/{{$medico->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">DNI</label>
            <input type="number" class="form-control" id="dni" name="dni" value="{{ $medico->dni }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $medico->nombre }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $medico->apellido }}">
        </div>
        <div class="form-group">
            <label for="id_especialidad">Especialidad</label>
            <select class="form-control" id="id_especialidad" name="id_especialidad" required>
                @foreach ($especialidades as $especialidad) 
                    <option value="{{ $especialidad->id }}"
                    @if ($especialidad->id === $medico->id_especialidad)
                            selected
                    @endif
                    >{{ $especialidad->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nro colegiado</label>
            <input type="number" class="form-control" id="nro_colegiado" name="nro_colegiado" value="{{ $medico->nro_colegiado }}">
        </div>
        <div class="form-group">
            <label for="id_cargo">Cargo</label>
            <select class="form-control" id="id_cargo" name="id_cargo" required>
                @foreach ($cargos as $cargo) 
                    <option value="{{ $cargo->id }}"
                    @if ($cargo->id === $medico->id_cargo)
                            selected
                    @endif
                    >{{ $cargo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection