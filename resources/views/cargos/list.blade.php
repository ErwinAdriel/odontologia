@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="cargos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($cargos as $cargo)
                <tr>
                    <th scope="row">{{ $cargo->id }}</th>
                    <td>{{ $cargo->nombre }}</td>
                    <td>
                        <a class="text-primary" href="cargos/{{$cargo->id}}/edit">Editar</a>
                        <a class="text-danger" href="">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection