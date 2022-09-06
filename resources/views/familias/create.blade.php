@extends('adminlte::page')
@section('title', 'crear-pacientes')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header">Datos del Paciente</div>
                    <div class="card-body">
                        @include('pacientes.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
