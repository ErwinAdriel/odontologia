@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="medicos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Nro_colegiado</th>
            <th scope="col">Cargo</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($medicos as $medico)
                <tr>
                    <th scope="row">{{ $medico->id }}</th>
                    <td>{{ $medico->dni }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    <td>{{ $medico->id_especialidad }}</td>
                    <td>{{ $medico->nro_colegiado }}</td>
                    <td>{{ $medico->id_cargo }}</td>
                    <td>
                        <a class="text-primary" href="medicos/{{$medico->id}}/edit">Editar</a>
                        <a class="text-danger" href="">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection