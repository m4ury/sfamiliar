@extends('adminlte::page')
@section('content')
@section('title', 'menu-paciente')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn bg-gradient-info btn-sm mr-3" title="Volver" href="{{ route('pacientes.index') }}">
                        <i class="fas fa-arrow-alt-circle-left"></i> Volver
                    </a>
                    <i class="fas fa-users-cog"></i>
                    Paciente
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group row nowrap">
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">{{ $paciente->fullName() }}
                    </span>
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">RUT.: {{ $paciente->rut }}</span>
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">Nº Ficha:
                        {{ $paciente->ficha }}</span>
                    <span class="badge badge-pill bg-gradient-light badge mx-3 py-2">Sector: @if ($paciente->sector == 'celeste')
                            <i class="fas fa-square text-primary"></i> Celeste
                        @elseif($paciente->sector == 'naranjo')
                            <i class="fas fa-square text-orange"></i> Naranjo
                        @else
                            <i class="fas fa-square text-white"></i> Blanco
                        @endif
                    </span>
                    @if ($paciente->pasivo == 1)
                        <span class="badge badge-pill bg-gradient-info badge mx-3 py-2">
                            {{ $paciente->pasivo ? 'Paciente Pasivo' : '' }}
                        </span>
                    @endif

                    <div class="col-sm text-right">
                        <a class="btn bg-gradient-primary btn-sm" title="Editar"
                            href="{{ route('pacientes.edit', $paciente->id) }}"> Editar Paciente <i class="fas fa-pen mx-2"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-paciente-tab" data-toggle="pill"
                                href="#vert-tabs-paciente" role="tab" aria-controls="vert-tabs-paciente"
                                aria-selected="true">Informacion del Paciente</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-paciente" role="tabpanel"
                                aria-labelledby="vert-tabs-paciente-tab">
                                <div class="card-body">
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección</strong>
                                    <p class="text-muted">
                                        {{ $paciente->direccion }}, {{ $paciente->comuna ?: 'Hualañe' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-phone-alt mr-1"></i> Telefono</strong>
                                    <p class="text-muted">{{ $paciente->telefono ?: 'Sin datos...' }}</p>
                                    <hr>
                                    <strong><i class="fas fa-disease mr-1"></i>Enfermedad Cronica</strong>
                                    <br>
                                    <p class="btn badge-pill bg-gradient-info">
                                        {{ $paciente->enf_cronica ?:
                                            'No se encontraron
                                                                                                                        datos...' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
