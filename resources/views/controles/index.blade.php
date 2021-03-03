@extends('adminlte::page')

@section('title', 'patologias')

@section('content')

    <div class="col-md-12">

    </div>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nueva patologia" href="{{ route('patologias.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nueva patologia
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="patologias" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patologias as $patologia)
                <tr>
                    <td>{{ $patologia->nombre_patologia }}</td>
                    <td>{{ $patologia->descripcion_patologia }}</td>
                    <td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('patologias.edit', $patologia->id) }}"><i class="fas fa-pen"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('js')
    <script>
        $("#patologias").DataTable();
    </script>
@endsection
