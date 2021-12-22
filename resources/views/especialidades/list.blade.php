@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="especialidades/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-responsive-sm table-style2 table-bordered">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($especialidades as $especialidad)
                <tr>
                    <th scope="row">{{ $especialidad->id }}</th>
                    <td>{{ $especialidad->nombre }}</td>
                    <td>
                        <a class="btn btn-primary" href="especialidades/{{$especialidad->id}}/edit">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="onDelete({{$especialidad->id}}, 'especialidades')">
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