@extends('inicio')
@section('main')
<div class="container">
    <h5 class="h5Add">ADD RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/medicos">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">DNI</label>
            <input type="number" class="form-control" id="dni" name="dni">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Especialidad</label>
            <select class="form-control" id="especialidad" name="especialidad">
            <option>1</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nro colegiado</label>
            <input type="number" class="form-control" id="nro_colegiado" name="nro_colegiado">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Cargo</label>
            <select class="form-control" id="cargo" name="cargo">
            <option>1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection