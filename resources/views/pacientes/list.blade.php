@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="pacientes/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Telefono</th>
            <th scope="col">Historia clinica</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Genero</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr>
                    <th scope="row">{{ $paciente->id }}</th>
                    <td>{{ $paciente->dni }}</td>
                    <td>{{ $paciente->nombre }}</td>
                    <td>{{ $paciente->apellido }}</td>
                    <td>{{ $paciente->domicilio }}</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->historia_clinica }}</td>
                    <td>{{ $paciente->fecha_de_nacimiento }}</td>
                    <td>{{ $paciente->genero }}</td>
                    <td>
                        <a class="text-primary" href="pacientes/{{$paciente->id}}/edit">Editar</a>
                        <a class="text-danger" href="">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection