@extends('adminlte::page')

@section('title', 'controles')

@section('content')
    <div class="col-md-12">
    </div>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo control" href="{{ route('controles.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nuevo control
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="controles" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($controles as $control)
                <tr>
                    <td>{{ $control->nombre_control }}</td>
                    <td>{{ $control->descripcion_control }}</td>
                    <td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('controles.edit', $control->id) }}"><i class="fas fa-pen"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('js')
    <script>
        $("#controles").DataTable();
    </script>
@endsection
