@extends('adminlte::page')
@section('content')
@section('title', 'menu-paciente')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users-cog"></i>
                    Paciente
                </h3>
                <div class="col-sm">
                    @if (\Request::is('pacientes/*'))
                        <a class="btn bg-gradient-secondary btn-sm ml-4" title="Regresar"
                           href="{{ route('pacientes.index') }}">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                            Atras
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <h4>{{ $paciente->fullName() }}</h4>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link" id="vert-tabs-controles-tab" data-toggle="pill"
                               href="#vert-tabs-controles" role="tab" aria-controls="vert-tabs-presupuestos"
                               aria-selected="false">Controles</a>
                            <a class="nav-link" id="vert-tabs-patologias-tab" data-toggle="pill" href="#vert-tabs-patologias"
                               role="tab" aria-controls="vert-tabs-patologias" aria-selected="false">Patologias</a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane fade" id="vert-tabs-controles" role="tabpanel"
                                 aria-labelledby="vert-tabs-controles-tab">
                                @include('controles.list_controles', $paciente)
                                @if($paciente->controls->count() > 0)
                                    <a href="{{ route('controles', $paciente->id) }}"><span
                                                class="text-bold">Ver Todos los controles...</span></a>
                                @else
                                    <p class="text-muted">No hay Controles aun, crea uno <i
                                                class="far fa-laugh-wink fa-2x"></i></p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-patologias" role="tabpanel"
                                 aria-labelledby="vert-tabs-patologias-tab">
                               @include('patologias.list_patologias', $paciente)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection