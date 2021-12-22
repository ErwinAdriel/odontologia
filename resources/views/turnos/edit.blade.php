@extends('inicio')
@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/turnos">Turnos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <h5 class="h5Add">EDIT RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/turnos/{{$turno->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="id_medico">Medico</label>
            <select class="form-control" id="id_medico" name="id_medico" required>
            @foreach ($medicos as $medico) 
                <option value="{{ $medico->id }}"
                @if ($medico->id === $turno->id_medico)
                    selected
                @endif
                >{{ $medico->nombre }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_paciente">Paciente</label>
            <select class="form-control" id="id_paciente" name="id_paciente" required>
            @foreach ($pacientes as $paciente) 
                <option value="{{ $paciente->id }}"
                @if ($paciente->id === $turno->id_paciente)
                    selected
                @endif
                >{{ $paciente->nombre }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $turno->fecha }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" value="{{ $turno->hora }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection