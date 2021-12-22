@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="medicos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-responsive-lg table-style2 table-bordered">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <td>{{ $medico->especialidad->nombre }}</td>
                    <td>{{ $medico->nro_colegiado }}</td>
                    <td>{{ $medico->cargo->nombre }}</td>
                    <td>
                        <a class="btn btn-primary" href="medicos/{{$medico->id}}/edit">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="onDelete({{$medico->id}}, 'medicos')">
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