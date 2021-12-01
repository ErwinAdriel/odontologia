@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="pacientes/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <a class="btn btn-primary" href="pacientes/{{$paciente->id}}/edit">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="onDelete({{$paciente->id}}, 'pacientes')">
                        Eliminar
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

<script>
    function onDelete(id, model){
    const result = confirm("Está seguro de que desea eliminar este registro?");
    const url = `/${model}/${id}`;
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    if(result){
      $.ajax({
            type: "DELETE",
            url,
            success: function () {
                    location.reload();
                }
            })
        }
    }
</script>

@endsection