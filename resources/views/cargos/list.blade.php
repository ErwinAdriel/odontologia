@extends('inicio')
@section('main')

<div class="container">
    <a class="btn btn-success btn-add" href="cargos/create" role="button">Add</a>
    <div class="table-style">
        <table class="table table-style2 table-bordered">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <a class="btn btn-primary" href="cargos/{{$cargo->id}}/edit">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="onDelete({{$cargo->id}}, 'cargos')">
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