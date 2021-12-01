@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="turnos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <button type="button" class="btn btn-danger" onclick="onDelete({{$turno->id}}, 'turnos')">
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