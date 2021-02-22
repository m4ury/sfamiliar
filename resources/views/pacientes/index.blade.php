@extends('adminlte::page')

@section('title', 'pacientes')

@section('content')

    <div class="col-md-12">
        {{--success alert al crear--}}
        {{--@if(session()->has('success'))
            <div id="alert" class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif--}}
        <div class="page-header">
            <div class="form-group">
            </div>
        </div>
    </div>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Paciente" href="{{ route('pacientes.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nuevo Paciente
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Rut</th>
                <th>Nombre Completo</th>
                {{--<th>Nº Ficha Clinica</th>--}}
                <th>Edad</th>
                <th>Sexo</th>
                <th>Sector</th>
                {{--<th colspan="2" class="text-center">Acciones</th>--}}
            </tr>
            </thead>
            <tbody>

            @foreach($pacientes as $paciente)

                <tr>
                    <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</a></td>
                    <td>{{ $paciente->fullName() }}</td>
                    <td>{{ $paciente->edad() }}</td>
                    <td>{{ $paciente->sexo }}</td>
                    {{--<td>{{ $paciente->ficha()->numero }}</td>--}}
                    <td>{{ $paciente->sector ? 'celeste' : '<span style="color:Mediumslateblue"><i class="fas fa-map-marker-alt "></i></span>' }}</td>
                    {{--<td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('pacientes.edit', $paciente->id) }}"><i class="fas fa-pen"></i></a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        {{--{{ $pacientes->links() }}--}}
    </div>
@stop
@section('js')
    <script>
        $("#pacientes").DataTable();
    </script>
@endsection
