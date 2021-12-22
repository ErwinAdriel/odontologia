@extends('inicio')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/turnos">Turnos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar</li>
        </ol>
    </nav>
    <h5 class="h5Add">ADD RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/turnos">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Medico</label>
            <select class="form-control" id="id_medico" name="id_medico">
            @foreach ($medicos as $medico) 
                <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Paciente</label>
            <select class="form-control" id="id_paciente" name="id_paciente">
            @foreach ($pacientes as $paciente) 
                <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection