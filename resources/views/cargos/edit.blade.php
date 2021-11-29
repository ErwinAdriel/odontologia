@extends('inicio')
@section('main')
<div class="container">
    <h5 class="h5Add">EDIT RECORD</h5>
    <div class="form-add">
        <form method="POST" action="/cargos/{{$cargo->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cargo->nombre}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
    
@endsection