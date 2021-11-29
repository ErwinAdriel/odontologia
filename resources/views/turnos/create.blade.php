@extends('inicio')
@section('main')
<div class="container">
    <h5 class="h5Add">ADD RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/turnos">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Medico</label>
            <select class="form-control" id="id_medico" name="id_medico">
            <option>0</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Paciente</label>
            <select class="form-control" id="id_paciente" name="id_paciente">
            <option>0</option>
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