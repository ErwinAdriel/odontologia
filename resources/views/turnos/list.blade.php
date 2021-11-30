@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="turnos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Medico</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Paciente</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($turnos as $turno)
                <tr>
                    <th scope="row">{{ $turno->id }}</th>
                    <td>{{ $turno->medico->nombre }}</td>
                    <td>{{ $turno->medico->especialidad->nombre }}</td>
                    <td>{{ $turno->paciente->nombre }}</td>
                    <td>{{ $turno->fecha }}</td>
                    <td>{{ $turno->hora }}</td>
                    <td>
                        <a class="btn btn-primary" href="turnos/{{$turno->id}}/edit">Editar</a>
                        <a class="text-danger" href="">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection